<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\FabricType;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new CategoryController();
        $products = Product::all();
        $fabrics = FabricType::all();
        return view('admin.product.index')->with(['categories'=>$category->getCategory(),
        'products'=>$products, 'fabrics'=>$fabrics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $product = new Product();
        // dd($request);
        $product->name = ucwords($request->name);
        $product->price = $request->price;
        $product->block_status = $request->block_status;
        $product->stock_status = $request->stock_status;
        $product->description = $request->description;
        $product->fabric_id = $request->fabric_id;
        $product->category_id = $request->category_id;
        $product->code = $this->generateRandomString(6);
        $product->save();
        $request['id'] = $product->id;
        $request['type'] = 'product';
        $imageController = new ImageController();
        $imageController->store($request);
        return redirect()->route('products.index');
    }

    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //Product Detail
        $productData = Product::whereId($product->id)->with('image')->first();
        $fabric = FabricType::whereId($product->fabric_id)->first();
        // dd($productData);
        return view('client.products.detail')->with(['product'=> $productData, 'fabric'=> $fabric]);
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
