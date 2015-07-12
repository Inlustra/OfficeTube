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
        // get data from request
        $code = $request->get('code');

        // get fb service
        $sc = \OAuth::consumer('SoundCloud');

        // check if code is valid

        // if code is provided get user data and sign in
        if (!is_null($code)) {
            // This was a callback request from facebook, get the token
            $token = $sc->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($sc->request('me.json'), true);

            $message = 'Your unique soundcloud user id is: ' . $result['id'];
            echo $message . "<br/>";

            //Var_dump
            //display whole array.
            dd($result);
        } // if not ask for permission first
        else {
            // get fb authorization
            $url = $sc->getAuthorizationUri();

            // return to facebook login url
            return redirect((string)$url);
        }
    }

}