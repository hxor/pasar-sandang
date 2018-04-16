<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function productAll(Request $request)
    {
        $query = $request->get('q');
        if ($query) {
            $products = Product::where('name', 'LIKE', '%' . $query . '%')->paginate(12);
        } else {
            $products = Product::paginate(12);
        }        
        return view('pages.front.product.index', compact('products', 'query'));
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $category = $product->categories()->first();
        $related = Product::whereHas('categories', function ($q) use ($category) {
            $q->where('category_id', $category->id);
        })->get();

        if ($related->count() >= 7) {
            $relates = $related->random(7);
        } else if($related->count() < 7) {
            $relates[] = $related->random();
        } else {
            $relates = null;
        }

        return view('pages.front.product.show', compact('product', 'relates'));
    }

    public function categoryProduct($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->paginate(12);
        return view('pages.front.product.index', compact('products'));
    }
}
