<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image_id', 'user_id'];

    public function image() {

        return $this->belongsTo(Image::class, 'image_id');
    }

    public function author() {

        return $this->belongsTo(User::class, 'user_id');
    }
}
