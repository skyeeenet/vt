<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['value'];

    public function categories() {

        return $this->belongsToMany(Category::class, 'album_categories');
    }

    public function images() {

        return $this->belongsToMany(Image::class, 'album_images');
    }

    public function delImages() {

        return $this->hasMany(Album_Image::class);
    }

    public function delCategories() {

        return $this->hasMany(Album_Category::class);
    }
}
