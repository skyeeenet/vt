<?php

namespace App;

use App\Models\Advert;
use App\Models\Best;
use App\Models\Lecturer;
use App\Models\Role;
use App\Models\SocialUser;
use Illuminate\Notifications\Notifiable;
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

    public function best() {

        return $this->hasMany(Best::class);
    }

    public function teacher() {

        return $this->hasMany(Lecturer::class);
    }

    public function role() {

        return $this->belongsTo(Role::class);
    }

    public function from() {

        return $this->belongsTo(Message::class, 'from', 'id');
    }

    public function to() {

        return $this->belongsTo(Message::class, 'to');
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
