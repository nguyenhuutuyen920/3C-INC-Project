<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats  = Category::orderBy('CategoryID','DESC')->paginate(10);
        return view('admin.category.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'CategoryParentID'=> 'required',
            'CategoryName' => 'required|unique:categories',
            'CategoryAlias' => 'required',
            'CategoryPageTitle' => 'required',
            'CategoryMetaKeyword' => 'required',
            'CategoryMetaDescription' => 'required',
            'ViewOrder' => 'required',
            'IsVisible' => 'required',
            'IsTypical' => 'required',
            'TypicalImage' => 'required'
        ]);

        $data = $request->all();
        

        Category::create($data);

        return redirect()->route('category.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'CategoryParentID'=> 'required',
            'CategoryName' => 'required|',
            'CategoryAlias' => 'required',
            'CategoryPageTitle' => 'required',
            'CategoryMetaKeyword' => 'required',
            'CategoryMetaDescription' => 'required',
            'ViewOrder' => 'required',
            'IsVisible' => 'required',
            'IsTypical' => 'required',
            'TypicalImage' => 'required'
        ]);

        $data = $request->all('CategoryParentID','CategoryName','CategoryAlias','CategoryPageTitle',
        'CategoryMetaKeyword','CategoryMetaDescription','ViewOrder','IsVisible','IsTypical','TypicalImage');
        $category->update($data);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
