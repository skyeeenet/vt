<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpperSlider extends Model
{
    protected $fillable = ['value', 'image_id'];

    public function image() {

        return $this->belongsTo(Image::class);
    }
}
