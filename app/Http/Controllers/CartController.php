<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;

class CartController extends Controller
{
	public function index()
	{
		return view('pages.front.cart.index');
		return Cart::content();
	}

    public function addProduct(Request $request)
    {
    	$this->validate($request, [
    		'product_id' => 'required|exists:products,id',
    		'quantity' => 'required|integer|min:1'
    	]);

    	$product = Product::find($request->get('product_id'));
		$quantity = $request->get('quantity');
		// $weight = number_format(($product->weight / 1000) * $quantity, 2);
		
		$cart = Cart::add([
			'id' => $product->id,
			'name' => $product->name,
			'qty' => $quantity,
			'price' => $product->price,
			'options' => [
				'photo' => $product->photo_path,
				'weight' => $product->weight,
				'slug' => $product->slug
			]
		]);
		
		// return Cart::content();
		return redirect()->back();
	}
	
	public function updateProduct(Request $request, $id)
	{
		$this->validate($request, [
    		'qty' => 'required|integer|min:1'
		]);
		
		$quantity = (int) $request->get('qty');
		Cart::update($id, $quantity);

		return redirect()->route('cart.index');
	}
    
    public function deleteProduct($id)
    {
        Cart::remove($id);
		return redirect()->back();
	}
	
	public function destroyCart()
	{
		Cart::destroy();
		return redirect()->back();
	}
}
