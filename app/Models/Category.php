<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['value'];

    public function albums() {

        return $this->belongsToMany('App\Models\Album', 'album_categories', 'category_id', 'album_id');
    }
}
