<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference_user extends Model
{
    protected $fillable = ['conference_id', 'theme', 'speaker', 'head'];
}
