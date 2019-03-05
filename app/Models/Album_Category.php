<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album_Category extends Model
{
    protected $table = 'album_categories';

    protected $fillable = ['album_id', 'category_id'];
}
