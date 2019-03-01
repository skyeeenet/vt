<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['image_id', 'value', 'url'];

    public function image() {

        return $this->belongsTo(Image::class);
    }

    public function socialUser() {

        return $this->hasMany(SocialUser::class, 'social_id', 'id');
    }
}
