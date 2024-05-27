<?php

namespace App\Http\Controllers;

use App\Models\Introduce;
use App\Models\Tab;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $introds = Introduce::orderBy('IntroduceID', 'ASC')->paginate(10);
        return view('admin.introduce.index',compact('introds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.introduce.create',compact('tabs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'IntroducePageTitle'=> 'required|',
            'IntroduceAlias'=> 'required|',
            'IntroduceMetaKeyword'=> 'required|',
            'IntroduceMetaDescription'=> 'required|',
            'IntroduceImage'=> 'required|',
            'Title'=> 'required|',
            'IntroduceAbtract'=> 'required|',
            'IntroduceContent'=> 'required|',
            'ViewOrder'=> 'required|',
            'IsTypical'=> 'required|',
        ]);
        $data = $request->all();

        if ($request->hasFile('IntroduceImage')) {
            $uploadedFile = $request->file('IntroduceImage');
            $imageName = $uploadedFile->getClientOriginalName();
            
            // Lưu tệp ảnh vào thư mục storage/app/public/images với tên gốc
            $uploadedFile->storeAs('public/images', $imageName);
            
            // Cập nhật tên tệp ảnh trong mảng $data
            $data['IntroduceImage'] = $imageName;
        }

        Introduce::create($data);

        return redirect()->route('introduce.index')->with('success','Create Success Infomation');
    }

    /**
     * Display the specified resource.
     */
    public function show(Introduce $introduce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Introduce $introduce)
    {
        $tabs = Tab::all();
        return view('admin.introduce.edit',compact('tabs','introduce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Introduce $introduce)
    {

        $request->validate([
            'TabID'=> 'required|',
            'IntroducePageTitle'=> 'required|',
            'IntroduceAlias'=> 'required|',
            'IntroduceMetaKeyword'=> 'required|',
            'IntroduceMetaDescription'=> 'required|',
            'IntroduceImage'=> 'required|',
            'Title'=> 'required|',
            'IntroduceAbtract'=> 'required|',
            'IntroduceContent'=> 'required|',
            'ViewOrder'=> 'required|',
            'IsTypical'=> 'required|',
        ]);

        
        $data = $request->all('TabID','IntroducePageTitle','IntroduceAlias','IntroduceMetaKeyword',
        'IntroduceMetaDescription','IntroduceImage','Title','IntroduceAbtract','IntroduceContent','ViewOrder','IsTypical');
        if ($request->hasFile('IntroduceImage')) {
            $uploadedFile = $request->file('IntroduceImage');
            $imageName = $uploadedFile->getClientOriginalName();
            
            // Lưu tệp ảnh vào thư mục storage/app/public/images với tên gốc
            $uploadedFile->storeAs('public/images', $imageName);
            
            // Cập nhật tên tệp ảnh trong mảng $data
            $data['IntroduceImage'] = $imageName;
        }

        $introduce->update($data);

        return redirect()->route('introduce.index')->with('success','Create Success Infomation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Introduce $introduce)
    {
        $introduce->delete();
        return redirect()->route('introduce.index');
    }
}
