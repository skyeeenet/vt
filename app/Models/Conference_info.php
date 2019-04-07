<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference_info extends Model
{
    protected $fillable = ['conference_id', 'place', 'time', 'chairman', 'secretary', 'duration', 'show_reg', 'slider_id', 'protocol', 'theses'];
}
