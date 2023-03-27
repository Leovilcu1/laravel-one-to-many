<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Helpers
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "HDMI",
            "CSS",
            "JAVASCRIPT",
            "BOOTSTRAP",
            "MYSQL",
            "LARAVEL",
            "VUE"
        ];
        foreach($categories as $category){
            $newCategory = Category::create([
                "name"=>$category,
                "slug"=>Str::slug($category),
            ]);
        }
    }
}
 