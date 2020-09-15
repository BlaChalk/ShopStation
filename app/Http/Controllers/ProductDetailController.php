<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use App\Category;
use App\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        $mainCategories = MainCategory::all();
        $categories = Category::all();

        return view('/admin.productDetails.index', ['productDetails' => $productDetails, 'mainCategories' => $mainCategories, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productDetail = new ProductDetail;
        $mainCategories = MainCategory::all();
        $categories = Category::all();

        return view('/admin.productDetails.create', ['productDetail' => $productDetail, 'mainCategories' => $mainCategories, 'categories' => $categories]);
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
        if(!is_null($request->file('productDetailPicture')))
            $productDetail->productDetailPicture = $this->addProductDetailPicture($request);
        if(!is_null($request->file('specificationPicture')))
            $productDetail->specificationPicture = $this->addSpecificationPicture($request);
        $productDetail->save();

        return redirect('/admin/product-details');
    }

    private function addPicture(Request $request)
    {
        $path = $request->file('bigPicture')->store('public/productPictures');
        $path = str_replace('public/', '/storage/', $path);

        return $path;
    }

    private function addProductDetailPicture(Request $request)
    {
        $path = $request->file('productDetailPicture')->store('public/productDetailPictures');
        $path = str_replace('public/', '/storage/', $path);

        return $path;
    }

    private function addSpecificationPicture(Request $request)
    {
        $path = $request->file('specificationPicture')->store('public/specificationPictures');
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

    public function showByPublicCategory()
    {
        $productDetails = ProductDetail::all();
        $mainCategories = MainCategory::all();
        $categories = Category::all();

        return view('product', ['productDetails' => $productDetails, 'mainCategories' => $mainCategories, 'categories' => $categories]);
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
        $mainCategories = MainCategory::all();
        $categories = Category::all();

        return view('/admin.productDetails.edit', ['productDetail' => $productDetail, 'mainCategories' => $mainCategories, 'categories' => $categories]);
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
        if(!is_null($request->file('productDetailPicture')))
            $productDetail->productDetailPicture = $this->addProductDetailPicture($request);
        if(!is_null($request->file('specificationPicture')))
            $productDetail->specificationPicture = $this->addSpecificationPicture($request);

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
        $productDetail->delete();

        return redirect('/admin/product-details');
    }
}
