<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Advert extends Model
{
    use Searchable;

    protected $fillable = ['value', 'user_id', 'short'];

    public function author() {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('short' => $array['short'],'value' => $array['value'], 'id' => $array['id']);
    }
}
