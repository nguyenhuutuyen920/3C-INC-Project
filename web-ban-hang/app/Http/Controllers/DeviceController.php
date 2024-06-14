<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::orderBy('DeviceID', 'ASC')->paginate(10);
        return view('admin.device.index', compact('devices',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats  = Category::all();
        return view('admin.device.create',compact('cats'));
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
            'DeviceTitle'=>'required|unique:devices',
            'DeviceImage'=>'required|',
            'DeviceContent'=>'required|',
            'Technicaldata'=>'required|',
            'RelatedProduct'=>'required|',
            'hienThiTuDongHoa'=>'required|',
            'HienThiVienThongXayLap'=>'required|',
            'HienThiThiNghiemDoLuong'=>'required|',
        ]);
        // dd($request->all());
        if ($request->hasFile('DeviceImage')) {
            
            $uploadedFile = $request->file('DeviceImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
        
            $uploadedFile->move("media/DeviceImage/",$imageName);
        }
        $device = new Device();
        $device->CategoryID = $request->input('CategoryID');
        $device->DeviceTitle = $request->input('DeviceTitle');
        $device->DeviceContent = $request->input('DeviceContent');
        $device->Technicaldata = $request->input('Technicaldata');
        $device->RelatedProduct = $request->input('RelatedProduct');
        $device->DeviceImage = 'media/DeviceImage/' . $imageName;
        $device->hienThiTuDongHoa = $request->input('hienThiTuDongHoa');
        $device->HienThiVienThongXayLap = $request->input('HienThiVienThongXayLap');
        $device->HienThiThiNghiemDoLuong = $request->input('HienThiThiNghiemDoLuong');
    
        $device->save();
        return redirect()->route('device.index')->with('success','Thêm dự án thành công!');
    }
    public function uploadproject(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media/DeviceImage'), $fileName);

            $url = asset('media/DeviceImage/' . $fileName);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $cats = Category::all();
        return view('admin.device.edit', compact('device','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $request->validate([
            'CategoryID'=>'required|',
            'DeviceTitle'=>'required|unique:device',
            'DeviceImage'=>'required|',
            'DeviceContent'=>'required|',
            'Technicaldata'=>'required|',
            'RelatedProduct'=>'required|',
            'hienThiTuDongHoa'=>'required|',
            'HienThiVienThongXayLap'=>'required|',
            'HienThiThiNghiemDoLuong'=>'required|',
        ]);
        if ($request->hasFile('DeviceImage')) {

            $uploadedFile = $request->file('DeviceImage');
            $imageName = $uploadedFile->getClientOriginalName(); // Lấy tên gốc của tệp ảnh
            if ($device->DeviceImage) {
                $oldImagePath = public_path('media/DeviceImage/' . $device->DeviceImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $uploadedFile->move("media/DeviceImage/",$imageName);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('device.index');
    }
}
