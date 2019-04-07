<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Best extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'interview_url'];

    public function user() {

        return $this->belongsTo(User::class,'user_id');
    }
}
