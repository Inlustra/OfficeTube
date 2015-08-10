<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 12/07/2015
 * Time: 13:54
 */

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use GuzzleHttp;

class OAuthController extends Controller
{

    public function soundcloud2(Request $request)
    {
        $service = "SOUNDCLOUD";
        $code = $request->get('code');
        $sc = \OAuth::consumer('SoundCloud');
        $token = $sc->requestAccessToken($code);
        $result = json_decode($sc->request('me.json'), true);
        $user = null;
        $authtoken = \App\OAuthToken::find($service, $result['id']);
        if ($authtoken == null) {
            $user = new \App\User;
            $user->name = $result['first_name'];
            $user->avatar = $result['avatar_url'];
            $user->save();
            $authtoken = new \App\OauthToken;
            $authtoken->service = $service;
            $authtoken->id = $result['id'];
            $authtoken->token = $token->getAccessToken();
            $authtoken->expires_at = $token->getEndOfLife();
            $user->oauths()->save($authtoken);
            \Auth::login($user);
        }
        $user = $authtoken->user;
        \Auth::login($user);
        return $user;

    }

    /**
     * Login with Facebook.
     */
    public function soundcloud(Request $request)
    {
        $accessTokenUrl = 'https://api.soundcloud.com/oauth2/token';
        $graphApiUrl = 'https://api.soundcloud.com/me';
        $service = 'SOUNDCLOUD';
        $params = [
            'code' => $request->input('code'),
            'client_id' => $request->input('clientId'),
            'redirect_uri' => $request->input('redirectUri'),
            'client_secret' => \Config::get('oauth.soundcloud')['client_secret'],
            'grant_type' => 'authorization_code'
        ];
        $client = new GuzzleHttp\Client();
        $accessToken = $client->post($accessTokenUrl, ['body' => $params])->json();
        $params = [
            'oauth_token' => $accessToken['access_token']
        ];
        $profile = $client->get($graphApiUrl, ['query' => $params])->json();
        $authtoken = \App\OAuthToken::find($service, $profile['id']);
        if (CAuth::hasToken()) {
            if ($authtoken->first()) {
                return response()->json(['message' => 'There is already a Soundcloud account that belongs to you'], 409);
            }
            $user = CAuth::getUser();
            $authtoken = new \App\OauthToken;
            $authtoken->service = $service;
            $authtoken->id = $profile['id'];
            $authtoken->token = $accessToken;
            $user->oauths()->save($authtoken);
            return response()->json(CAuth::asToken($user));
        }

        if ($authtoken->first()) {
            return response()->json(CAuth::asToken($authtoken->first()->user()));
        }
        $user = new \App\User;
        $user->name = $profile['first_name'];
        $user->avatar = $profile['avatar_url'];
        $user->save();
        $authtoken = new \App\OauthToken;
        $authtoken->service = $service;
        $authtoken->id = $profile['id'];
        $authtoken->token = $accessToken;
        $user->oauths()->save($authtoken);
        return response()->json(CAuth::asToken($user));
    }

}