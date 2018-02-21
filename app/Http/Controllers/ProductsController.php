<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('pages.back.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required',
            'weight' => 'required',
            'hotoffer' => 'required',
            'stock' => 'required',
            'category_lists' => 'required'
        ]);

        $request['slug'] = str_slug($request->get('name'), '-');
        $data = $request->only('name', 'description', 'price', 'weight', 'stock', 'slug');
        
        $product = Product::create($data);
        $product->categories()->sync($request->get('category_lists'));

        return redirect()->route('admin.products.images', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('title', 'id')->all();
        $product = Product::findOrFail($id);
        return view('pages.back.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required',
            'weight' => 'required',
            'hotoffer' => 'required',
            'stock' => 'required',
            'category_lists' => 'required'
        ]);

        $request['slug'] = str_slug($request->get('name'), '-');
        $data = $request->only('name', 'description', 'price', 'weight', 'stock', 'slug');
        
        $product = Product::findOrFail($id);
        $product->update($data);
        // is category_lists request greater than null ?
        if (count($request->get('category_lists')) > 0) {
            // syncing the categories data in this product
            $product->categories()->sync($request->get('category_lists'));
        } else {
            // else, detach all categories
            $product->categories()->detach();
        }

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully updated',
        ]);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        // Check is product has images or not
        if ($product->images()->count() > 0) {
            // If true, let foreach and delete the image before delete database
            foreach ($product->images as $image) {
                $this->imageDelete($image->path);
            }
        }
        // Delete Product data
        $product->delete();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);

        return redirect()->route('admin.products.index');
    }

    public function dataTable()
    {
        $products = Product::query();
        return Datatables::of($products)
            ->addColumn('price', function ($product) {
                return 'Rp'.number_format($product->price,2,',','.');
            })
            ->addColumn('weight', function ($product) {
                return $product->weight / 1000 . 'Kg';
            })
            ->addColumn('stock', function ($product) {
                return $product->stock ? 'in stock' : 'Limit';
            })
            ->addColumn('images', function ($product) {
                return '<a href="'. route('admin.products.images', $product->id) .'" class="btn btn-outline-secondary btn-sm"> <i class="fa fa-camera"></i></a>';
            })
            ->addColumn('action', function ($products){
                return view('layouts.back.partials._action', [
                    'model' => $products->id,
                    'form_url' => route('admin.products.destroy', $products->id),
                    'edit_url' => route('admin.products.edit', $products->id),
                    'show_url' => route('admin.products.show', $products->id),
                ]);
            })
        ->rawColumns(['images', 'action'])->make(true);
    }

    /**
     * Redirect to Images Product Form
     */
    public function imageForm($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.back.products.upload', compact('product'));
    }

    /**
     * Upload images from Images Form Page
     */
    public function imageUpload(Request $request, $id)
    {
        $photo = $request->file('file');
        $fileName = 'product-'. $id . '-'. uniqid() . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'products';
        $photo->move($destinationPath, $fileName);

        ProductGallery::create([
            'path' => $fileName,
            'product_id' => $id
        ]);
    }

    /**
     * Delete selected Image
     */
    public function destroyImage($id)
    {
        $image = ProductGallery::find($id);
        $this->imageDelete($image->path);
        $image->delete();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);

        return redirect()->back();
    }

    /**
     * Delete image function
     */
    public function imageDelete($image)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . $image;
        unlink($path);
    }
}
