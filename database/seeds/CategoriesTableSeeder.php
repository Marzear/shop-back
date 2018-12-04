<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            Category::create([
                'name' => '男鞋',
                'photo_path' => 'man.jpg'
            ]);
            Category::create([
                'name' => '女鞋',
                'photo_path' => 'woman.jpg'
            ]);
            Category::create([
                'name' => '男童',
                'photo_path' => 'boy.png'
            ]);
            Category::create([
                'name' => '女童',
                'photo_path' => 'girl.jpg'
            ]);
    }
}
