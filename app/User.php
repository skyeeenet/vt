<?php

namespace App;

use App\Models\Advert;
use App\Models\Role;
use App\Models\SocialUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function adverts() {

        return $this->hasMany(Advert::class);
    }

    public function social() {

        return $this->hasMany(SocialUser::class,'user_id');
    }

    public function role() {

        return $this->belongsTo(Role::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image', 'description', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
