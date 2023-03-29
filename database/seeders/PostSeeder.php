<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Model
use App\Models\Post;

// Helper
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <100 ; $i++) { 
        $title = $faker->unique()->sentence(4);
        $categoryId = null;
        if(rand(0,1)){
            $categoryId = Category::inRandomOrder()->first()->id;
        }
            Post::create([
                "title"=>$title,
                "slug"=>Str::slug($title),
                "content"=>$faker->paragraph(),
                "category_id"=>$categoryId
            ]);
        }
    }
}
