<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = ['value', 'description', 'page_id'];

    public function page() {

        return $this->belongsTo(Page::class, 'page_id');
    }
}
