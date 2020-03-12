<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Product;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
    $product = Product::all('id')->pluck('id')->all();
    $categories = Category::all('id')->pluck('id')->all();
    //array_push($products, null);

    $name = $faker->words(2, true);		//привязали название категории к ссылке категории
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'parent_id' => \Arr::random($product->categories()->sync($request->categories)),
        'img' => $faker->imageUrl(600, 400, 'cats'),
    ];
});
