<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider_Image extends Model
{
    protected $fillable = ['image_id', 'value'];

    protected $table = 'slider_images';

    public function image() {

        return $this->belongsTo(Image::class, 'image_id');
    }
}
