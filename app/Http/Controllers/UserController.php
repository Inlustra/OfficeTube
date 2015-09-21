<?php

namespace App\Http\Controllers;

use App\User;
use Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $userRules = array(
        'email' => 'email',
        'dob' => 'date'
    );

    public function getUser(Request $request)
    {
        return \CAuth::getUser();
    }

    public function updateUser(Request $request)
    {
        $this->validate($request, $this->userRules);
        $user = \CAuth::getUser();
        $this->updateIfHas($user, 'fullname');
        $this->updateIfHas($user, 'name');
        $this->updateIfHas($user, 'email');
        $this->updateIfHas($user, 'avatar');
        $this->updateIfHas($user, 'dob');
        $user->save();
        return $user->toJson();
    }

    public function updateIfHas($var, $field)
    {
        if (Input::has($field)) {
            $var[$field] = Input::get($field);
        }
    }
}