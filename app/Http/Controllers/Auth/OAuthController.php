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

class OAuthController extends Controller
{
    public function loginWithSoundcloud(Request $request)
    {
        $service = "SOUNDCLOUD";
        $code = $request->get('code');
        $sc = \OAuth::consumer('SoundCloud');
        if (!is_null($code)) {

            $token = $sc->requestAccessToken($code);
            $result = json_decode($sc->request('me.json'), true);

            dd($result);
            $authtoken = \App\OAuthToken::where('id', '=', $result['id'])
                ->where('service', '=', $service)
                ->first();
            if($authtoken == null) {
                var_dump($result);
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
                Auth::login($user);
                return \Redirect::to('/#/signup/');
            }
            return \Redirect::to('/#/signup/');
        }
        else {
            // get fb authorization
            $url = $sc->getAuthorizationUri();

            // return to facebook login url
            return redirect((string)$url);
        }
    }

}