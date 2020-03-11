<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'name' => Str::random(10),
        //     'slug' => Str::random(10),
        //     'parent_id' => null,
        //     'img' => null,
        // ]);
        factory(App\Category::class, 50)->create();
    }
}
