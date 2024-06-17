<!DOCTYPE html>
<html>
<head>
    {{-- <script src="admin_asset/ckeditor5/ckeditor.js"></script> --}}

</head>
<body>
@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Device
                    <small>Add</small>
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
            <form action="{{ route('device.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label>CategoryID</label>
                    <select class="form-control" name="CategoryID" id="subcate_id">
                        @foreach($cats as $cat)
                            <option 
                            value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tiêu Đề Thiết Bị</label>
                    <input class="form-control" type="text" name="DeviceTitle" placeholder="Vui Lòng Nhập Tiêu Đề Thiết Bị" />
                </div>
                <div class="form-group">
                    <label>Hình Ảnh Thiết Bị</label>
                    <input class="form-control" type="file" name="DeviceImage" placeholder="Vui Lòng Nhập Hình Ảnh Thiết Bị" />
                </div>
                <div class="form-group">
                    <label>Nội Dung Thiết Bị</label>
                    <input class="form-control" type="text" name="DeviceContent" placeholder="Vui Lòng Nhập Category ALias"/>
                </div>                   
                <div class="form-group">
                    <label>Thông Số Kĩ Thuật</label>
                    <textarea class="form-contro" type="text" id="editor" style="height: 500px;"  name="Technicaldata" placeholder="Vui Lòng Nhập Thông Số Kĩ Thuật"></textarea>
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Liên Quan</label>
                    <input class="form-control" type="text" name="RelatedProduct" placeholder="Vui Lòng Nhập Sản Phẩm Liên Quan"/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Tự Động Hóa</label>
                    <input class="form-control" type="number" min="0" max="1" name="hienThiTuDongHoa" placeholder="Vui Lòng Nhập Hiển Thị Tự Động Hóa"/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Thiết Bị Xây Lắp</label>
                    <input class="form-control" type="number" min="0" max="1" name="HienThiVienThongXayLap" placeholder="Vui Lòng Nhập Hiển Thị Thiết Bị Xây Lắp "/>
                </div>
                <div class="form-group">
                    <label>Hiển Thị Thiết Bị Thí Nghiệm Đo Lường</label>
                    <input class="form-control" type="number" min="0" max="1" name="HienThiThiNghiemDoLuong" placeholder="Vui Lòng Nhập Hiển Thị Thiết Bị Thí Nghiệm Đo Lường"/>
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
@section('javascript')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
</body>
</html>