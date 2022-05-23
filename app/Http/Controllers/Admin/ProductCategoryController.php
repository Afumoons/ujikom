<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Http\Requests\Admin\StoreProductCategoryRequest;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = ProductCategory::get();
        return view('admin.productCategory.index', [
            'title' => 'Product Category Dashboard',
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productCategory.create', [
            'title' => 'Create Product Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $validatedData = $request->validated();

        ProductCategory::create($validatedData);

        return redirect()->route('admin.product-category.index')->with('success', 'Product Category has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($productCategory)
    {
        // find product category then delete
        $productCategory = ProductCategory::findOrFail($productCategory);
        $productCategory->delete();

        //return to index
        return redirect()->route('admin.product-category.index')->with('success', 'Product Category has been deleted.');
    }
}
