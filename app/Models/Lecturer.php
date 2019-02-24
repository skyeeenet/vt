<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = ['user_id', 'position', 'department', 'email', 'phone', 'facebook', 'ntb'];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
