<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'price', 'img', 'describe', 'sku', 'favorite'];

    public function setSlugAttribute($value)
    {
    	$this->attributes['slug'] = \Str::slug( $value ? $value : $this->attributes['name'], '-');
    }
    public function setFavoriteAttribute($value)
    {
    	$this->attributes['favorite'] = $value ? 1 : 0;
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'product_category', 'product_id', 'category_id');
    }
}
