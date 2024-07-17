@extends('admin.index')
@section('content')
<script type="text/javascript">
function kiemtra () {
    // body...
    if (!window.confirm("DỮ LIỆU SẼ BỊ XÓA VĨNH VIỄN. BẠN CÓ MUỐN TIẾP TỤC?")) {
        return false;
    };
}
</script>
<div id="page-wrapper">
    <div class="container-fluid" style="width:100%; overflow:auto;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Device
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover ">
            <thead>
                <tr>
                    <th>ID Thiết Bị</th>
                    <th>Id Danh Mục</th>
                    <th>Tên Thiết Bị</th>
                    <th>Hình Ảnh Thiết Bị</th>
                    <th>Nội Dung Thiết Bị</th>
                    <th>Thông Số Kĩ Thuật</th>
                    <th>Thiết Bị Liên Quan</th>
                    <th>Hiển Thị Tự Động Hóa</th>
                    <th>Hiển Thị Thiết Bị Xây Lắp</th>
                    <th>Hiển Thị Thiết Bị Thí Nghiệm Đo Lường</th>
                    <th>IsTypical</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($devices as $dev)
                    <tr class="">
                        <td>{{ $dev->DeviceID}}</td>
                        <td>{{ $dev->CategoryID}}</td>
                        <td>{{ $dev->DeviceTitle}}</td>
                        <td>
                            <img src="{{ asset($dev->DeviceImage)}}" alt="" width="150">
                        </td>
                        <td>{{ $dev->DeviceContent}}</td>
                        <td >{!! $dev->Technicaldata!!}</td>
                        <td>{{ $dev->RelatedProduct}}</td>
                        <td>{{ $dev->hienThiTuDongHoa}}</td>
                        <td>{{ $dev->HienThiVienThongXayLap}}</td>
                        <td>{{ $dev->HienThiThiNghiemDoLuong}}</td>
                        <td class="center">
                            <form action="{{ route('device.destroy',$dev->DeviceID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('device.edit',$dev->DeviceID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-user" style="display: flex; flex-direction: row-reverse;">
            {{ $devices->links('pagination::bootstrap-4') }}
        </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection