<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['item', 'url'];

    public function submenu() {

        return $this->hasMany(Submenu::class);
    }
}
