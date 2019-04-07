<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{

    use Searchable;

    protected $fillable = ['title', 'body', 'image_id','short_body' , 'user_id'];

    public function image() {

        return $this->belongsTo(Image::class, 'image_id');
    }

    public function author() {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('title' => $array['title'],'short_body' => $array['short_body'], 'id' => $array['id']);
    }
}
