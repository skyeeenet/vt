<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['type', 'year'];

    public function info() {

        return $this->hasOne(Conference_info::class);
    }

    public function users() {

        return $this->hasMany(Conference_user::class);
    }
}
