<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Product;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        return view('product_categories.index',['product_categories' => $product_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::all();
       
        return view('product_categories.create',['product_categories' => $product_categories]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_category = new ProductCategory;

        $product_category->title = $request->product_category_title;
        $product_category->description = $request->product_category_description;
        
        
        $product_category->save();

        return redirect()->route('product_category.index')->with('success_message', 'Product Category added to database');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $product_category)
    {
        return view('product_categories.show', ['product_category'=> $product_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $product_category)
    {
        // $product_category = 1
        // $product_category = {id: 1, name: ..., kt: ...}
        $product_categories = ProductCategory::all();
        return view('product_categories.edit',['product_category' => $product_category],['product_categories' => $product_categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $product_category)
    {
        //pasiimu is lauku, ir irasau i duomenu baze

        $product_category->title = $request->product_category_title;
        $product_category->description = $request->product_category_description;
        
        $product_category->save();//UPDATE

        return redirect()->route('product_category.index')->with('success_message', 'Data of Product Category updated at the database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $product_category)
    {
        
        $product_categories = $product_category->productCategoryProducts; // masyvas
        $products = Product::all();
        if(count($product_category->productCategoryProducts) != 0) {
            return redirect()->route('product_category.index')->with('error_message', 'Delete is not possible because product category has products');
        }
        
        
        $product_category->delete();
        return redirect()->route('product_category.index');
    }
}


