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
        return view('admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'NewsAlias' => 'required|',
            'NewsMetaKeyword' => 'required|',
            'NewsMetaDescription' => 'required|',
            'NewsTitle' => 'required|unique:news',
            'NewsImage' => 'required|',
            'Abstract' => 'required|max:250',
            'NewsContent' => 'required|',
            'NewsSource' => 'required|',
            // 'ViewTime' => 'required|',
            // 'RelatedNews' => 'required|',
            // 'ViewOrder' => 'required|',
            // 'IsTypical' => 'required|',
            // 'IsHotNews' => 'required|',
            // 'IsApproved' => 'required|',
            // 'ApprovedBy' => 'required|',
        ]);
        if ($request->hasFile('NewsImage')) {
            $uploadedFile = $request->file('NewsImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            $uploadedFile->move("NewsImage/",$imageName);
        }
        $new = new News();
        $new->NewsAlias = $request->input('NewsAlias');
        $new->NewsMetaKeyword = $request->input('NewsMetaKeyword');
        $new->NewsMetaDescription = $request->input('NewsMetaDescription');
        $new->NewsTitle = $request->input('NewsTitle');
        $new->NewsImage = 'NewsImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $new->Abstract = $request->input('Abstract');
        $new->NewsContent = $request->input('NewsContent');
        $new->NewsSource = $request->input('NewsSource');
        // $new->ViewTime = $request->input('ViewTime');
        // $new->RelatedNews = $request->input('RelatedNews');
        // $new->ViewOrder = $request->input('ViewOrder');
        // $new->IsTypical = $request->input('IsTypical');
        // $new->IsHotNews = $request->input('IsHotNews');
        // $new->IsApproved = $request->input('IsApproved');
        // $new->ApprovedBy = $request->input('ApprovedBy');
        // Create a new new instance
        
        $new->save();
        // Redirect to a specific route after successful creation
        return redirect()->route('new.index')->with('success', 'Thêm sản phẩm thành công!');
    }
    public function newupload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media/NewsImage/'), $fileName);

            $url = asset('media/NewsImage/' . $fileName);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }
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

        return view('admin.new.edit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $new)
    {
        $request->validate([
            'NewsAlias' => 'required|',
            'NewsMetaKeyword' => 'required|',
            'NewsMetaDescription' => 'required|',
            'NewsTitle' => 'required|',
            'NewsImage' => 'required|',
            'Abstract' => 'required|max:250',
            'NewsContent' => 'required|',
            'NewsSource' => 'required|',
            // 'ViewTime' => 'required|',
            // 'RelatedNews' => 'required|',
            // 'ViewOrder' => 'required|',
            // 'IsTypical' => 'required|',
            // 'IsHotNews' => 'required|',
            // 'IsApproved' => 'required|',
            // 'ApprovedBy' => 'required|',
        ]);
        if ($request->hasFile('NewsImage')) {

            $uploadedFile = $request->file('NewsImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($new->NewsImage) {
                $oldImagePath = public_path('NewsImage' . $new->NewsImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("NewsImage",$imageName);
        }
        $new->NewsAlias = $request->input('NewsAlias');
        $new->NewsMetaKeyword = $request->input('NewsMetaKeyword');
        $new->NewsMetaDescription = $request->input('NewsMetaDescription');
        $new->NewsTitle = $request->input('NewsTitle');
        $new->NewsImage = 'NewsImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $new->Abstract = $request->input('Abstract');
        $new->NewsContent = $request->input('NewsContent');
        $new->NewsSource = $request->input('NewsSource');
        // $new->ViewTime = $request->input('ViewTime');
        // $new->RelatedNews = $request->input('RelatedNews');
        // $new->ViewOrder = $request->input('ViewOrder');
        // $new->IsTypical = $request->input('IsTypical');
        // $new->IsHotNews = $request->input('IsHotNews');
        // $new->IsApproved = $request->input('IsApproved');
        // $new->ApprovedBy = $request->input('ApprovedBy');
        // Create a new new instance
        
        $new->update();

        return redirect()->route('new.index')->with('success', 'Product updated successfully!');
    }
    public function neweditupload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Kiểm tra và xóa tệp cũ nếu tồn tại
            $oldFilePath = public_path('media/NewsImage/' . $fileName);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Di chuyển tệp mới vào thư mục đã chỉ định
            $request->file('upload')->move(public_path('media/NewsImage/'), $fileName);

            $url = asset('media/NewsImage/' . $fileName);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }
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
