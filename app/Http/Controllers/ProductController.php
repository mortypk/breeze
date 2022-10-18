<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(40);
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_description' => 'required',
            'item_price' => 'required',
        ]);
        $product = $request->all();
        Product::create([
            'item_name' => $product['item_name'],
            'item_description' => $product['item_description'],
            'item_price' => $product['item_price'],
            'item_image' => 'image.jpg',
        ]);
        return redirect()->route('product.index')->with([
            'type', 'success',
            'title', 'Addition',
            'message', 'New Product Added!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'item_name' => 'required',
            'item_description' => 'required',
            'item_price' => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('product.index')->with([
            'type', 'success',
            'title', 'Updated!',
            'message', 'Product Info Updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $u=$product->name;
        $product->delete();
        return redirect()->route('product.index')->with([
            'type', 'warning',
            'title', 'Deleted!',
            'message', "Product $u Info Updated!",
        ]);
    }
}
