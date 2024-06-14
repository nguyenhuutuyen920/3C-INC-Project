@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Device
                    <small>{{$device->DeviceTitle}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <form action="{{ route('device.update',$device->DeviceID)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label>CategoryID</label>
                    <select class="form-control" name="CategoryID" id="subcate_id">
                        @foreach($cats as $cat)
                            <option 
                            @if($device->CategoryID == $cat->CategoryID)
                                {{"selected"}}
                            @endif
                            value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tiêu Đề Thiết Bị</label>
                    <input class="form-control" type="text" value="{{$device->DeviceTitle}}" name="DeviceTitle" placeholder="Vui Lòng Nhập Tiêu Đề Thiết Bị" />
                </div>
                <div class="form-group">
                    <label>Hình Ảnh Thiết Bị</label>
                    <input class="form-control" type="file" value="{{$device->DeviceImage}}" name="DeviceImage" placeholder="Vui Lòng Nhập Hình Ảnh Thiết Bị" />
                </div>
                <div class="form-group">
                    <label>Nội Dung Thiết Bị</label>
                    <input class="form-control" type="text" value="{{$device->DeviceContent}}" name="DeviceContent" placeholder="Vui Lòng Nhập Category ALias"/>
                </div>                   
                <div class="form-group">
                    <label>Thông Số Kĩ Thuật</label>
                    <textarea class="form-control" type="text" name="Technicaldata" placeholder="Vui Lòng Nhập Thông Số Kĩ Thuật">{{$device->Technicaldata}}</textarea>
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Liên Quan</label>
                    <input class="form-control" type="text" value="{{$device->RelatedProduct}}" name="RelatedProduct" placeholder="Vui Lòng Nhập Sản Phẩm Liên Quan"/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Tự Động Hóa</label>
                    <input class="form-control" type="number" min="0" max="1" value="{{$device->hienThiTuDongHoa}}" name="hienThiTuDongHoa" placeholder="Vui Lòng Nhập Hiển Thị Tự Động Hóa"/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Thiết Bị Xây Lắp</label>
                    <input class="form-control" type="number" min="0" max="1" value="{{$device->HienThiVienThongXayLap}}" name="HienThiVienThongXayLap" placeholder="Vui Lòng Nhập Hiển Thị Thiết Bị Xây Lắp "/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Thiết Bị Thí Nghiệm Đo Lường</label>
                    <input class="form-control" type="number" min="0" max="1" value="{{$device->HienThiThiNghiemDoLuong}}" name="HienThiThiNghiemDoLuong" placeholder="Vui Lòng Nhập Hiển Thị Thiết Bị Thí Nghiệm Đo Lường"/>
                </div>
                
                <button type="submit" class="btn btn-default">Device Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection