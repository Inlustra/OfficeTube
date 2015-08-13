<?php
namespace TheNairn;

use Illuminate\Support\Facades\Facade;

class CAuthFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'CAuth';
    }

}