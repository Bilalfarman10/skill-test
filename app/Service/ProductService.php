<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService extends BaseService
{
    /**
     * Get list of products.
     *
     * @param Request $request
     *
     * @return Products $products
     */
    public static function list($request)
    {
        $products = Product::orderBy('created_at', 'DESC')->get();

        if ($products->count() == 0) return false;

        return $products;
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public static function create($request)
    {
        $productCreate = [
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productImages' => $request->productImages,
            'productDescription' => $request->productDescription,
            'haveUnits' => $request->haveUnits,
            'unit' => $request->unit,
            'weightPerUnit' => $request->weightPerUnit,
        ];

        return Product::create($productCreate);
    }
}
