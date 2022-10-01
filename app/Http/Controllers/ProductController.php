<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\ProductService;
use App\Http\Requests\Product\ProductCreateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function productListing(Request $request)
    {
        $products = ProductService::list(
            $request
        );

        return $products ? apiResponse(true, null, $products, 200) : apiResponse(false, ['No product found'], null, 200);
    }

    /**
     * Show the form for creating a new product.
     *
     * @param  \Illuminate\Http\ProductCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function productCreate(ProductCreateRequest $request)
    {
        $product = ProductService::create($request);

        if (!$product) return apiResponse(false, 404, null, 403);

        return apiResponse(true, null, $product, 200);
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
