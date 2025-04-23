<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
// app/Http/Controllers/ProductController.php

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
}

public function create()
{
    return view('products.create');
}

    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
