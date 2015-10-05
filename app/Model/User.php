<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Auth\Passwords\CanResetPassword;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
    use Illuminate\Database\Eloquent\Model;

    class User extends Model implements AuthenticatableContract, CanResetPasswordContract
    {
        use Authenticatable, CanResetPassword;
        protected $appends = array('hasPassword');

        public function getHasPasswordAttribute()
        {
            return !empty($this->password);
        }

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['id','name', 'fullname', 'email', 'password'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = ['password', 'remember_token'];

        /**
         * Get the comments for the blog post.
         */
        public function oauths()
        {
            return $this->hasMany('App\OauthToken', 'user_id', 'id');
        }

        public function setEmailAttribute($value)
        {
            if (empty($value)) { // will check for empty string, null values, see php.net about it
                $this->attributes['email'] = NULL;
                return;
            }
            $this->attributes['email'] = $value;
        }
    }
