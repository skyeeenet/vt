<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['group_id', 'subject_id', 'week_id', 'number'];

    public function group() {

        return $this->belongsTo(Group::class, 'group_id');
    }

    public function subject() {

        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function week() {

        return $this->belongsTo(Week::class, 'week_id');
    }
}
