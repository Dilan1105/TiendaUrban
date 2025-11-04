<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /** Display a listing of products. */
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('products.index', compact('products'));
    }

    /** Show the form for creating a new product. */
    public function create()
    {
        return view('products.create');
    }

    /** Store a newly created product in storage. */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'nullable|integer',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Camiseta creada correctamente.');
    }

    /** Display the specified product. */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /** Show the form for editing the specified product. */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /** Update the specified product in storage. */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'nullable|integer',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Camiseta actualizada.');
    }

    /** Remove the specified product from storage. */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Camiseta eliminada.');
    }
}
