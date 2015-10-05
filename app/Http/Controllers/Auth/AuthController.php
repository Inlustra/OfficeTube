<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Response;
use Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, ['email' => 'email|required']);
        $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];
        if (Auth::once($credentials)) {
            return response()->json(\CAuth::asToken(Auth::user()));
        }
        return Response::json(array(
            'msg' => 'Incorrect login details.'
        ), 400);
    }


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
            if ($user == null) {
                $user = $this->createUser($profile);
            }
        } else {
            $user = $this->createUser($profile);
        }
        $user->oauths()->save($oauth);
        return response()->json(\CAuth::asToken($user));
    }

    public function createUser($profile)
    {
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

}
