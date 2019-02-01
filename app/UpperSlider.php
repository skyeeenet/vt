<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpperSlider extends Model
{
    protected $fillable = ['value', 'image_id'];

    public function image() {

        return $this->belongsTo(Image::class);
    }
}
