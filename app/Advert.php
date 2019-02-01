<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = ['value', 'user_id'];

    public function author() {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
