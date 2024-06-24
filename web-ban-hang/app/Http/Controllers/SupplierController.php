<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use App\Models\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('id', 'ASC')->paginate(10);
        return view('admin.supplier.index', compact('suppliers',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats  = Category::all();
        return view('admin.supplier.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CategoryID'=>'required|',
            'SupplierAlias'=>'required|',
            'SupplierMetaKeyword'=>'required|',
            'SupplierMetaDescription'=>'required|',
            'SupplierName'=>'required|unique:supplier',
            'SupplierImage'=>'required|',
        ]);
        // dd($request->all());
        if ($request->hasFile('SupplierImage')) {
            
            $uploadedFile = $request->file('SupplierImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            $uploadedFile->move("media/SupplierImage/",$imageName);
        }
        $supplier = new Supplier();
        $supplier->id = $request->input('id');
        $supplier->CategoryID = $request->input('CategoryID');
        $supplier->SupplierAlias = $request->input('SupplierAlias');
        $supplier->SupplierMetaKeyword = $request->input('SupplierMetaKeyword');
        $supplier->SupplierMetaDescription = $request->input('SupplierMetaDescription');
        $supplier->SupplierImage = 'media/SupplierImage/' . $imageName;
        $supplier->SupplierName = $request->input('SupplierName');
    
        $supplier->save();
        return redirect()->route('supplier.index')->with('success','Thêm dự án thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suppllier  $suppllier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $suppllier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suppllier  $suppllier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $cats = Category::all();
        return view('admin.supplier.edit', compact('cats','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'CategoryID'=>'required|',
            'SupplierAlias'=>'required|',
            'SupplierMetaKeyword'=>'required|',
            'SupplierMetaDescription'=>'required|',
            'SupplierName'=>'required|unique:supplier',
            'SupplierImage'=>'required|',
        ]);
        if ($request->hasFile('SupplierImage')) {

            $uploadedFile = $request->file('SupplierImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($supplier->SupplierImage) {
                $oldImagePath = public_path('media/SupplierImage/' . $supplier->SupplierImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("media/SupplierImage/",$imageName);
        }
        $supplier->id = $request->input('id');
        $supplier->CategoryID = $request->input('CategoryID');
        $supplier->SupplierAlias = $request->input('SupplierAlias');
        $supplier->SupplierMetaKeyword = $request->input('SupplierMetaKeyword');
        $supplier->SupplierMetaDescription = $request->input('SupplierMetaDescription');
        $supplier->SupplierImage = 'media/SupplierImage/' . $imageName;
        $supplier->SupplierName = $request->input('SupplierName');
    
        $supplier->update();
        return redirect()->route('supplier.index')->with('success','Thêm dự án thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
