<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['page_id', 'title'];

    public function images() {

        return $this->hasMany(Slider_Image::class, 'slider_id');
    }

    public function page() {

        return $this->belongsTo(Page::class, 'page_id');
    }
}
