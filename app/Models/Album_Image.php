<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album_Image extends Model
{
    protected $table = 'album_images';

    protected $fillable = ['album_id', 'image_id'];
}
