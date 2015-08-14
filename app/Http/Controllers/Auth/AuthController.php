<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    public function handleProviderCallback(\Request $request, $provider)
    {
        $provider = \Socialite::driver($provider);
        $provider->stateless();
        dd($provider);
        try {
            /** @var AbstractUser $profile */
            $profile = $provider->user();
            dd($profile);
            return response()->json(['token' => $this->createToken($profile)]);
        } catch (ClientException $e) {
            return response()->json(['message' => (string)$e->getResponse()->getBody()], 500);
        }
    }

    public function createToken($user)
    {
        $payload = [
            'id' => $user->id,
            'iat' => time(),
            'exp' => time() + (2 * 7 * 24 * 60 * 60)
        ];
        return \JWT::encode($payload, \Config::get('app.token_secret'));
    }
}
