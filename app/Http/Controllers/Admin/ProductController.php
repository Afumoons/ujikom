<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', [
            'title' => 'Product Dashboard',
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategory::get();
        return view('admin.product.create', [
            'title' => 'Create Product',
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validatedData = $request->validated();

        Product::create($validatedData);

        return redirect()->route('admin.product.index')->with('success', 'Product has been created.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $productCategories = ProductCategory::get();
        return view('admin.product.edit', [
            'title' => 'Edit Product',
            'product' => $product,
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validatedData = $request->validated();

        $product->update($validatedData);

        return redirect()->route('admin.product.edit', $product->id)->with('success', 'Product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product has been deleted.');
    }
}
