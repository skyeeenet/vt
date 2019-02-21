<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['image_id', 'value'];

    public function image() {

        return $this->belongsTo(Image::class);
    }
}
