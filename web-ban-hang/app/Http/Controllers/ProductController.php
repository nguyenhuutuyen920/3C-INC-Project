<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Field;
use App\Models\Supplier;
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
        $supps = Supplier::all();
        $cats = Category::all();
        return view('admin.product.create', compact('cats','supps'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'CategoryParentID'=> 'required',
            'SupplierID' => 'required|',
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
            'Abstract' => 'required|max:150',
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
        
            $uploadedFile->move("media/ProductImage/",$imageName);
        }

        $product = new Product();
        $product->CategoryParentID = $request->input('CategoryParentID');
        $product->SupplierID = $request->input('SupplierID');
        $product->ProductCode = $request->input('ProductCode');
        $product->ProductName = $request->input('ProductName');
        $product->ProductAlias = $request->input('ProductAlias');
        $product->ProductPageTitle = $request->input('ProductPageTitle');
        $product->ProductMetaKeyword = $request->input('ProductMetaKeyword');
        $product->ProductMetaDescription = $request->input('ProductMetaDescription');
        $product->ProductImage = 'media/ProductImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $product->CurentPrice = $request->input('CurentPrice');
        $product->OldPrice = $request->input('OldPrice');
        $product->IsShowprice = $request->input('IsShowprice');
        $product->Discount = $request->input('Discount');
        $product->StoreStatus = $request->input('StoreStatus');
        $product->Abstract = $request->input('Abstract');
        $product->ProductContent = $request->input('ProductContent');
        $product->OtherContent = $request->input('OtherContent');
        $product->Promotion = $request->input('Promotion');
        $product->TransportInformation = $request->input('TransportInformation');
        $product->RelatedNews = $request->input('RelatedNews');
        $product->RelatedProduct = $request->input('RelatedProduct');
        $product->ViewOder = $request->input('ViewOder');
        $product->IsTypical = $request->input('IsTypical');
        $product->IsHotProduct = $request->input('IsHotProduct');
        $product->IsPromotion = $request->input('IsPromotion');
        $product->IsBestSeller = $request->input('IsBestSeller');
        $product->IsWeeklyProduct = $request->input('IsWeeklyProduct');
        $product->IsApproved = $request->input('IsApproved');
        $product->ApprovedBy = $request->input('ApprovedBy');
        $product->ViewTime = $request->input('ViewTime');

        $product->save();

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
        $cats = Category::all();
        return view('admin.product.edit',compact('product',"cats"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'CategoryParentID' => 'required|',
            'SupplierID' => 'required|',
            'ProductCode' => 'required|',
            'ProductName' => 'required|',
            'ProductAlias' => 'required|',
            'ProductPageTitle' => 'required|',
            'ProductMetaKeyword' => 'required|',
            'ProductMetaDescription' => 'required|',
            'ProductImage' => 'required|',
            'CurentPrice' => 'required|',
            'OldPrice' => 'required|',
            'IsShowprice' => 'required|',
            'Discount' => 'required|',
            'StoreStatus' => 'required|',
            'Abstract' => 'required|max:150',
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
            'IsBestSeller' => 'required|',
            'IsWeeklyProduct' => 'required|',
            'IsApproved' => 'required|',
            'ApprovedBy' => 'required|',
            'ViewTime' => 'required|'
        ]);
        if ($request->hasFile('ProductImage')) {

            $uploadedFile = $request->file('ProductImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($product->ProductImage) {
                $oldImagePath = public_path('media/ProductImage/' . $product->ProductImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("media/ProductImage/",$imageName);
        }

        $product->CategoryParentID = $request->input('CategoryParentID');
        $product->SupplierID = $request->input('SupplierID');
        $product->ProductCode = $request->input('ProductCode');
        $product->ProductName = $request->input('ProductName');
        $product->ProductAlias = $request->input('ProductAlias');
        $product->ProductPageTitle = $request->input('ProductPageTitle');
        $product->ProductMetaKeyword = $request->input('ProductMetaKeyword');
        $product->ProductMetaDescription = $request->input('ProductMetaDescription');
        $product->ProductImage = 'media/ProductImage/' . $imageName; // Lưu đường dẫn đầy đủ của tệp ảnh
        $product->CurentPrice = $request->input('CurentPrice');
        $product->OldPrice = $request->input('OldPrice');
        $product->IsShowprice = $request->input('IsShowprice');
        $product->Discount = $request->input('Discount');
        $product->StoreStatus = $request->input('StoreStatus');
        $product->Abstract = $request->input('Abstract');
        $product->ProductContent = $request->input('ProductContent');
        $product->OtherContent = $request->input('OtherContent');
        $product->Promotion = $request->input('Promotion');
        $product->TransportInformation = $request->input('TransportInformation');
        $product->RelatedNews = $request->input('RelatedNews');
        $product->RelatedProduct = $request->input('RelatedProduct');
        $product->ViewOder = $request->input('ViewOder');
        $product->IsTypical = $request->input('IsTypical');
        $product->IsHotProduct = $request->input('IsHotProduct');
        $product->IsPromotion = $request->input('IsPromotion');
        $product->IsBestSeller = $request->input('IsBestSeller');
        $product->IsWeeklyProduct = $request->input('IsWeeklyProduct');
        $product->IsApproved = $request->input('IsApproved');
        $product->ApprovedBy = $request->input('ApprovedBy');
        $product->ViewTime = $request->input('ViewTime');

        $product->update();

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
