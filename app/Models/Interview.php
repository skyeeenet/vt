<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Interview extends Model
{
    use Sluggable;

    protected $fillable = ['content', 'seo_title', 'seo_description', 'seo_h1', 'slug', 'user_id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [ 'slug' => [ 'source' => 'seo_h1' ] ];
    }
}
