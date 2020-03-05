<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id', 'img'];

    public function setSlugAttribute($value)
    {
    	$this->attributes['slug'] = \Str::slug($value ? $value : $this->attributes['name'], '-');
    }
}
