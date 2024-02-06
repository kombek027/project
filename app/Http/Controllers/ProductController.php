<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        dd(123);

        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);
        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }   
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $product->update($data);

        return redirect(route('product.index'));
    }
    public function show(Product $product)
    {
            return view('products.update', compact('product'));
    }
    public function delete(Product $product)
    {
        $product->delete();
        // Product::delete($product)
        
        return redirect(route('product.index'));
    }
}
