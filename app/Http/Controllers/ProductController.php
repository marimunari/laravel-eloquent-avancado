<?php

namespace App\Http\Controllers;

use App\Product;
use App\Scopes\ActivatedScope;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\Products as ProductsResource;

use ProductSeeder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Product::withTrashed()->find(2)->restore();
        //Product::find(2)->delete();
        //Product::delete(1);
        //return new ProductsResource(Product::withTrashed()->get());
        //return new ProductsResource(Product::onlyTrashed()->get());
        //return new ProductsResource(Product::onlyTrashed()->forceDelete());
        //return new ProductsResource(Product::withoutGlobalScope('isActivated')->get());
        //return new ProductsResource(Product::withoutGlobalScope(ActivatedScope::class)->get());
        return new ProductsResource(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
