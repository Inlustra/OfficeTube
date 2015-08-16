<?php
namespace TheNairn;

use \Firebase\JWT\JWT;

class CAuth
{

    public function getToken()
    {

        if (\Request::header('Authorization') == null) {
            return \App::abort(401, 'Not authenticated');
        }
        $token = explode(' ', \Request::header('Authorization'))[1];
        return JWT::decode($token, \Config::get('jwt.secret'), array('HS256'));
    }

    public function asToken($user)
    {
        return ['token' => $this->createToken($user)];
    }

    public function hasToken()
    {
        return \Request::header('Authorization');
    }

    public function getUser()
    {
        return \App\User::find($this->getToken()->sub);
    }

    public function createToken($user)
    {
        $payload = [
            'sub' => $user->id,
            'iat' => time(),
            'exp' => time() + (2 * 7 * 24 * 60 * 60)
        ];
        return JWT::encode($payload, \Config::get('jwt.secret'));
    }
}