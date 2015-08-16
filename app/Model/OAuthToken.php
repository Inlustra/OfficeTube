<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAuthToken extends Model
{
    protected $table = 'oauths';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function find($service, $id)
    {
        return self::where('service', '=', $service)
            ->where('id', '=', $id)
            ->first();
    }
}
