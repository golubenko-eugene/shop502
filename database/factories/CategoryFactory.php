<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
	$categories = Category::all('id')->pluck('id')->all();
    array_push($categories, null);

    $name = $faker->words(2, true);		//привязали название категории к ссылке категории
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'parent_id' => \Arr::random($categories),
        'img' => $faker->imageUrl(600, 400, 'cats'),
    ];
});
