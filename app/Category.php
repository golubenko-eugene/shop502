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
    public function parent()
    {
    	return $this->belongsTo('App\Category', 'parent_id');	//belongsTo - связь между таблицами
    }
    public function getParentCategoryAttribute()
    {
    	return $this->parent ? $this->parent->name : '';
    }
}
