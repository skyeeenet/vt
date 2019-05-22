<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{

    use Sluggable;
    use Searchable;

    protected $fillable = ['title', 'body', 'image_id','short_body' , 'user_id', 'slug'];

    public function sluggable() {

        return [ 'slug' => [ 'source' => 'title' ] ];
    }

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
