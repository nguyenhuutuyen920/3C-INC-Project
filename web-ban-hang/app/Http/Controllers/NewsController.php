<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('NewsID', 'ASC')->paginate(10);
        return view('admin.new.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prods = Product::all();
        $cats = Category::all();
        return view('admin.new.create',compact('cats','prods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'NewsCategoryID' => 'required|',
            'NewsImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'NewsAlias' => 'required|',
            'NewsMetaKeyword' => 'required|',
            'NewsMetaDescription' => 'required|',
            'NewsTitle' => 'required|',
            'Abstract' => 'required|',
            'NewsContent' => 'required|',
            'NewsSource' => 'required|',
            'ViewTime' => 'required|',
            'RelatedNews' => 'required|',
            'RelatedProduct' => 'required|',
            'ViewOrder' => 'required|',
            'IsTypical' => 'required|',
            'IsHotNews' => 'required|',
            'IsApproved' => 'required|',
            'ApprovedBy' => 'required|',
        ]);
        if ($request->hasFile('NewsImage')) {
            $uploadedFile = $request->file('NewsImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            // Lưu tệp ảnh vào thư mục storage/app/public/images với tên gốc
            $uploadedFile->storeAs('public/images', $imageName);
        }

        // Create a new product instance
        $data = $request->all();

        News::create($data);

        // Redirect to a specific route after successful creation
        return redirect()->route('new.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function news(News $news)
    {
        return view('pages.news',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $new)
    {
        $prods = Product::all();
        $cats = Category::all();
        return view('admin.new.edit',compact('cats','prods'),compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $new)
    {
        $request->validate([
            'NewsCategoryID' => 'required|',
            'NewsImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'NewsAlias' => 'required|',
            'NewsMetaKeyword' => 'required|',
            'NewsMetaDescription' => 'required|',
            'NewsTitle' => 'required|',
            'Abstract' => 'required|',
            'NewsContent' => 'required|',
            'NewsSource' => 'required|',
            'ViewTime' => 'required|',
            'RelatedNews' => 'required|',
            'RelatedProduct' => 'required|',
            'ViewOrder' => 'required|',
            'IsTypical' => 'required|',
            'IsHotNews' => 'required|',
            'IsApproved' => 'required|',
            'ApprovedBy' => 'required|',
        ]);
        $data = $request->all('NewsCategoryID','NewsImage','NewsAlias','NewsMetaKeyword','NewsMetaDescription','NewsTitle',
        'Abstract','NewsContent','NewsSource','ViewTime','RelatedNews','RelatedProduct',
        'ViewOrder','IsTypical','IsHotNews','IsApproved','ApprovedBy');

        $new->update($data);

        return redirect()->route('new.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $new)
    {
        $new->delete();
        return redirect()->route('new.index')->with('success','Thêm thành công');
    }
}
