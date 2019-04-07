<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from', 'to', 'message'];

    public function userTo() {

        return $this->belongsTo(User::class, 'to', 'id');
    }

    public function userFrom() {

        return $this->belongsTo(User::class, 'from', 'id');
    }
}
