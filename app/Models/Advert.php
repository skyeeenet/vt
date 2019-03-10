<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = ['value', 'user_id', 'short'];

    public function author() {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
