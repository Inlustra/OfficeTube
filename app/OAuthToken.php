<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAuthToken extends Model
{
    protected $table = 'oauths';

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
