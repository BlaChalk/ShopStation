<?php

namespace App\Http\Controllers;

use App\Category;
use App\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainCategories = MainCategory::all();
        $categories = Category::all();

        return view('admin.categories.index', ['mainCategories' => $mainCategories, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainCategories = MainCategory::all();

        return view('/admin.categories.create', ['mainCategories' => $mainCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category = new Category();
        $category->fill($request->all());

        // 新增主分類
        if(!$category->main_category_id)
        {
            $mainCategory = new MainCategory();
            $mainCategory->fill($request->all());
            $mainCategory->save();
            $category->main_category_id = $mainCategory->id;
        }

        $category->save();

        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mainCategories = MainCategory::all();
        $mainCategory = new MainCategory();

        foreach ($mainCategories as $key => $value) {
            if ($value->id == $id) {
                $mainCategory = $value;
            }
        }

        $categories = Category::all();

        return view('/admin/categories.edit', ['mainCategory' => $mainCategory, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $mainCategories = MainCategory::all();

        foreach ($mainCategories as $key => $mainCategory) {
            if ($mainCategory->id == $id) {
                if($mainCategory->main_name != $request->main_name)
                {
                    $mainCategory->main_name = $request->main_name;
                    $mainCategory->save();
                    break;
                }
            }
        }

        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
