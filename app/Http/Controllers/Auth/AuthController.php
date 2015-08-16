<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    public function handleProviderCallback(\Request $request, $service)
    {
        if (\Request::has('redirectUri')) {
            config()->set("services.{$service}.redirect", \Request::get('redirectUri'));
        }

        $provider = \Socialite::driver($service);
        $provider->stateless();
        try {
            /** @var AbstractUser $profile */
            $profile = $provider->user();
        } catch (ClientException $e) {
            return response()->json(['message' => (string)$e->getResponse()->getBody()], 500);
        }
        $authtoken = \App\OAuthToken::find($service, $profile['id']);

        if ($authtoken) { //Already linked to an account.
            return response()->json(\CAuth::asToken($authtoken->first()->user));
        }
        $oauth = $this->createOAuth($service, $profile);
        $user = null;
        if (\CAuth::hasToken()) { //Already logged in, link accounts
            $user = \CAuth::getUser();
            if($user == null) {
                $user = $this->createUser($profile);
            }
        } else {
            $user = $this->createUser($profile);
        }
        $user->oauths()->save($oauth);
        return response()->json(\CAuth::asToken($user));
    }

    public function createUser($profile) {
        $user = new \App\User;
        $user->name = $profile['first_name'];
        $user->avatar = $profile['avatar_url'];
        $user->save();
        return $user;
    }

    public function createOAuth($service, $profile)
    {
        $authtoken = new \App\OauthToken;
        $authtoken->service = $service;
        $authtoken->id = $profile->id;
        $authtoken->token = $profile->token;
        return $authtoken;
    }

    public function getUser(\Request $request) {
        return \CAuth::getUser();
    }
}
