<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.product.create');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'product_name' => 'required',
            'buyer_name' => 'required',
            'buyer_address' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        Product::create($request->all());
        notify()->success('Product created successfully!');
        return redirect()->route('products.index');
    }

    public function show(string $id)
    {
        $product = Product::find($id);
        return view('backend.pages.product.show', compact('product'));
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('backend.pages.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'product_name' => 'required',
            'buyer_name' => 'required',
            'buyer_address' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $product = Product::find($id);
        $product->update($request->all());
        notify()->success('Product updated successfully!');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        notify()->success('Product deleted successfully!');
        return redirect()->route('products.index');
    }
}
