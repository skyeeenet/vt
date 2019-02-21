<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    protected $table = 'social_users';

    protected $fillable = ['user_id', 'social_id', 'url'];
}
