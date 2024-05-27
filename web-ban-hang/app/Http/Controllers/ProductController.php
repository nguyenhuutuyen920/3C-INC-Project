<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tabs = Tab::all();
        $products = Product::orderBy('ProductID', 'ASC')->paginate(10);
        return view('admin.product.index', compact('products',));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', compact('tabs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'SupplierID' => 'required|',
            'MaterialID' => 'required|',
            'ProductCode' => 'required|',
            'ProductName' => 'required|string|max:255|unique:products',
            'ProductAlias' => 'required|',
            'ProductPageTitle' => 'required|',
            'ProductMetaKeyword' => 'required|',
            'ProductMetaDescription' => 'required|',
            'ProductImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CurentPrice' => 'required|',
            'OldPrice' => 'required|',
            'IsShowprice' => 'required|',
            'Discount' => 'required|',
            'StoreStatus' => 'required|',
            'Abstract' => 'required|',
            'ProductContent' => 'required|',
            'OtherContent' => 'required|',
            'Promotion' => 'required|',
            'TransportInformation' => 'required|',
            'RelatedNews' => 'required|',
            'RelatedProduct' => 'required|',
            'ViewOder' => 'required|',
            'IsTypical' => 'required|',
            'IsHotProduct' => 'required|',
            'IsPromotion' => 'required|',
            'IsEnjoyProduct' => 'required|',
            'IsBestSeller' => 'required|',
            'IsWeeklyProduct' => 'required|',
            'IsApproved' => 'required|',
            'ApprovedBy' => 'required|',
            'ViewTime' => 'required|'
        ]);
        // Handle file upload (image)
        if ($request->hasFile('ProductImage')) {
            $uploadedFile = $request->file('ProductImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            // Lưu tệp ảnh vào thư mục storage/app/public/images với tên gốc
            $uploadedFile->storeAs('public/images', $imageName);
        }

        // Create a new product instance
        $data = $request->all();

        Product::create($data);

        // Redirect to a specific route after successful creation
        return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công!');
    }
        

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $tabs = Tab::all();
        return view('admin.product.edit',compact('product'),compact('tabs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'TabID' => 'required|',
            'SupplierID' => 'required|',
            'MaterialID' => 'required|',
            'ProductCode' => 'required|',
            'ProductName' => 'required|string|max:255|unique:products',
            'ProductAlias' => 'required|',
            'ProductPageTitle' => 'required|',
            'ProductMetaKeyword' => 'required|',
            'ProductMetaDescription' => 'required|',
            'ProductImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CurentPrice' => 'required|',
            'OldPrice' => 'required|',
            'IsShowprice' => 'required|',
            'Discount' => 'required|',
            'StoreStatus' => 'required|',
            'Abstract' => 'required|',
            'ProductContent' => 'required|',
            'OtherContent' => 'required|',
            'Promotion' => 'required|',
            'TransportInformation' => 'required|',
            'RelatedNews' => 'required|',
            'RelatedProduct' => 'required|',
            'ViewOder' => 'required|',
            'IsTypical' => 'required|',
            'IsHotProduct' => 'required|',
            'IsPromotion' => 'required|',
            'IsEnjoyProduct' => 'required|',
            'IsBestSeller' => 'required|',
            'IsWeeklyProduct' => 'required|',
            'IsApproved' => 'required|',
            'ApprovedBy' => 'required|',
            'ViewTime' => 'required|'
        ]);
        
        // Lấy các trường dữ liệu từ request
        $data = $request->all('TabID','SupplierID','MaterialID','ProductCode',
        'ProductName','ProductAlias','ProductPageTitle','ProductMetaKeyword','ProductMetaDescription','ProductImage',
        'CurentPrice','OldPrice','IsShowprice','Discount','StoreStatus','Abstract','ProductContent','OtherContent','Promotion',
        'TransportInformation','RelatedNews','RelatedProduct','ViewOder','IsTypical','IsHotProduct','IsPromotion',
        'IsEnjoyProduct','IsBestSeller','IsWeeklyProduct','IsApproved','ApprovedBy','ViewTime');


        // Cập nhật thông tin sản phẩm
        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
