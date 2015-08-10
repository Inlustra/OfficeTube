<?php
namespace TheNairn;

use Illuminate\Support\Facades\Facade;

class CAuth extends Facade {

    public function getToken() {
        $token = explode(' ', Request::header('Authorization'))[1];
        return JWT::decode($token, Config::get('app.token_secret'), array('HS256'));
    }

    public function asToken($user) {
        return ['token' => $this->createToken($user)];
    }

    public function hasToken() {
        return Request::header('Authorization');
    }

    public function getUser() {
        return \App\User::find($this->getToken()['id']);
    }

    public function createToken($user)
    {
        $payload = [
            'id' => $user->id,
            'iat' => time(),
            'exp' => time() + (2 * 7 * 24 * 60 * 60)
        ];
        return JWT::encode($payload, \Config::get('app.token_secret'));
    }


    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'cauth';
    }

}