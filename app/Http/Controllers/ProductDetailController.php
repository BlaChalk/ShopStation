<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productDetails = ProductDetail::all();
        return view('/admin.productDetails.index', ['productDetails' => $productDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $productDetail = new ProductDetail;
        return view('/admin.productDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $productDetail = new ProductDetail;
        $productDetail->fill($request->all());
        $productDetail->bigPicture = $this->addPicture($request);
        $productDetail->save();

        return redirect('/admin/product-details');
    }

    private function addPicture(Request $request)
    {
        $path = $request->file('bigPicture')->store('public/productPictures');
        $path = str_replace('public/', '/storage/', $path);

        return $path;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function showByPublic(ProductDetail $productDetail)
    {
        return view('product-detail', ['productDetail' => $productDetail]);
    }

    public function show(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $productDetail)
    {
        return view('/admin.productDetails.edit', ['productDetail' => $productDetail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDetail $productDetail)
    {
        $productDetail->fill($request->all());
        if(!is_null($request->file('bigPicture')))
            $productDetail->bigPicture = $this->addPicture($request);

        $productDetail->save();

        return redirect('/admin/product-details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
