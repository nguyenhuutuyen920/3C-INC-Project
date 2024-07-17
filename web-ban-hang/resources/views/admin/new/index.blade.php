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
                <h1 class="page-header">News
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID Tin Tức</th>
                    <th>Bí Danh Tin Tức</th>
                    <th>Từ Khóa Tin Tức</th>
                    <th>Mô Tả Tin Tức</th>
                    <th>Tiêu Đề Tin Tức</th>
                    <th>Hình Ảnh Tin Tức</th>
                    <th>Tóm Tắt</th>
                    <th>Nội Dung Tin Tức</th>
                    <th>Nguồn Tin Tức</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr class="">
                        <td>{{ $new->NewsID}}</td>
                        <td>{{ $new->NewsAlias}}</td>
                        <td>{{ $new->NewsMetaKeyword}}</td>
                        <td>{{ $new->NewsMetaDescription}}</td>
                        <td>{{ $new->NewsTitle}}</td>
                        <td>
                            <img src="{{ asset($new->NewsImage) }}" width="150">
                        </td>
                        <td>{{ $new->Abstract}}</td>
                        <td>{!! $new->NewsContent!!}</td>
                        <td>{{ $new->NewsSource}}</td>
                        <td class="center">
                            <form action="{{ route('new.destroy',$new->NewsID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class=""></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class=""></i> <a href="{{ route('new.edit',$new->NewsID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-user" style="display: flex; flex-direction: row-reverse;">
            {{ $news->links('pagination::bootstrap-4') }}
        </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection