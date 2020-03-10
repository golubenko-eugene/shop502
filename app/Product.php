<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'slug', 'price', 'img', 'describe', 'sku', 'favorite'];

    public function setSlagAttribute($value)
    {
    	$this->attributes['slug']= \Str::slug( $value ? $value : $this->attributes['name'], '-');
    }
}
