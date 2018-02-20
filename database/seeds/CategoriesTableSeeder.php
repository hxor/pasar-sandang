<?php

use App\Models\Category;
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
        $category1 = Category::create(['title' => 'Category 1', 'slug' => 'category-1']);
        $category1->childs()->saveMany([
            new Category(['title' => 'Sub-category 1', 'slug' => 'sub-category-1']),
            new Category(['title' => 'Sub-category 2', 'slug' => 'sub-category-2']),
        ]);
        $category2 = Category::create(['title' => 'Category 2', 'slug' => 'category-2']);
        $category3 = Category::create(['title' => 'Category 3', 'slug' => 'category-3']);
        $category3->childs()->saveMany([
            new Category(['title' => 'Sub-category 3', 'slug' => 'sub-category-3']),
            new Category(['title' => 'Sub-category 4', 'slug' => 'sub-category-4']),
        ]);
    }
}
