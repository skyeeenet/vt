<?php

namespace App\Models;

use App\Models\CustomField;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    use Sluggable;

    protected $fillable = ['slug', 'seo_title', 'seo_description', 'seo_h1', 'content', 'template_id'];

    public function customFields() {
        return $this->hasMany(CustomField::class);
    }

    public function template() {
        return $this->belongsTo(Template::class);
    }

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
