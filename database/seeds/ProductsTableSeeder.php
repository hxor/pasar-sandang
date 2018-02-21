<?php

use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::find(1);
        $category2 = Category::find(2);
        $category3 = Category::find(3);
        $product = Product::create([
            'slug' => 'product-1',
            'name' => 'Product 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod eu urna vitae euismod. Duis finibus leo et est rhoncus molestie. Sed blandit tortor libero, ut imperdiet ipsum tristique non. Nunc sit amet vestibulum ligula, eu lacinia nisi.',
            'price' => 320000,
            'weight' => 12000,
            'hotoffer' => true,
            'stock' => true,
        ]);
        $product->images()->saveMany([
            new ProductGallery(['path' => 'product-1-1.jpg']),
            new ProductGallery(['path' => 'product-1-2.jpg']),
            new ProductGallery(['path' => 'product-1-3.jpg']),
        ]);
        $product->categories()->saveMany([
            $category, $category2, $category3
        ]);
    }
}
