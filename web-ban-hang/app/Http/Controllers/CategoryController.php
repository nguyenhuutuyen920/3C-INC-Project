<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Field;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats  = Category::orderBy('CategoryID','ASC')->paginate(10);
        return view('admin.category.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fields = Field::all();
        return view('admin.category.create',compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'FieldParentID'=> 'required',
            'CategoryParentID'=> 'required',
            'CategoryName' => 'required|unique:categories',
            'CategoryAlias' => 'required',
            'CategoryMetaKeyword' => 'required',
            'CategoryMetaDescription' => 'required',
            'IsVisible' => 'required',
            'IsTypical' => 'required',
            'TypicalImage' => 'required'
        ]);

        if ($request->hasFile('TypicalImage')) {
            
            $uploadedFile = $request->file('TypicalImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            $uploadedFile->move("media/CategoryImage/",$imageName);
        }

        $category = new Category();
        $category->FieldParentID = $request->input('FieldParentID');
        $category->CategoryParentID = $request->input('CategoryParentID');
        $category->CategoryName = $request->input('CategoryName');
        $category->CategoryAlias = $request->input('CategoryAlias');
        $category->CategoryMetaKeyword = $request->input('CategoryMetaKeyword');
        $category->CategoryMetaKeyword = $request->input('CategoryMetaKeyword');
        $category->TypicalImage = 'media/CategoryImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $category->CategoryMetaDescription = $request->input('CategoryMetaDescription');
        $category->IsVisible = $request->input('IsVisible');
        $category->IsTypical = $request->input('IsTypical');

        $category->save();

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
        $fields = Field::all();
        return view('admin.category.edit',compact('category','fields'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'FieldParentID'=> 'required',
            'CategoryParentID'=> 'required',
            'CategoryName' => 'required|',
            'CategoryAlias' => 'required',
            'CategoryMetaKeyword' => 'required',
            'CategoryMetaDescription' => 'required',
            'IsVisible' => 'required',
            'IsTypical' => 'required',
            'TypicalImage' => 'required'
        ]);
        if ($request->hasFile('TypicalImage')) {

            $uploadedFile = $request->file('TypicalImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($category->TypicalImage) {
                $oldImagePath = public_path('media/CategoryImage/' . $category->TypicalImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("media/CategoryImage/",$imageName);
        }

        $category->FieldParentID = $request->input('FieldParentID');
        $category->CategoryParentID = $request->input('CategoryParentID');
        $category->CategoryName = $request->input('CategoryName');
        $category->CategoryAlias = $request->input('CategoryAlias');
        $category->CategoryMetaKeyword = $request->input('CategoryMetaKeyword');
        $category->TypicalImage = 'media/CategoryImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $category->CategoryMetaDescription = $request->input('CategoryMetaDescription');
        $category->IsVisible = $request->input('IsVisible');
        $category->IsTypical = $request->input('IsTypical');

        $category->update();

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
