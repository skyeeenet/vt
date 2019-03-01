<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    protected $table = 'social_users';

    public function socialUser() {

        return $this->belongsTo(Social::class, 'social_id');
    }

    protected $fillable = ['user_id', 'social_id', 'url'];
}
