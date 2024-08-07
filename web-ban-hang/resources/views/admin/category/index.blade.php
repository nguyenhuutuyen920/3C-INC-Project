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
                <h1 class="page-header">Danh mục sản phẩm
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
                    <th>ID Danh Mục </th>
                    <th>Trường lĩnh vực</th>
                    <th>Category_ParentID</th>
                    <th>Tên Danh Mục</th>
                    <th>Bí Danh Danh Mục</th>
                    <th>Từ Khóa Danh Mục</th>
                    <th>Mô Tả Danh Mục</th>
                    <th>Hình Ảnh Điển Hình</th>
                    <th>Có thể thấy</th>
                    <th>Có thể Điển Hình</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)
                    <tr class="">
                        <td>{{ $cat->CategoryID}}</td>
                        <td>{{ $cat->FieldParentID}}</td>
                        <td>{{ $cat->CategoryParentID}}</td>
                        <td>{{ $cat->CategoryName}}</td>
                        <td>{{ $cat->CategoryAlias}}</td>
                        <td>{{ $cat->CategoryMetaKeyword}}</td>
                        <td>{{ $cat->CategoryMetaDescription}}</td>
                        <td>
                            <img src="{{ asset($cat->TypicalImage) }}" width="150">
                        </td>
                        <td>{{ $cat->IsVisible}}</td>
                        <td>{{ $cat->IsTypical}}</td>
                        <td class="center">
                            <form action="{{ route('category.destroy',$cat->CategoryID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('category.edit',$cat->CategoryID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-user" style="display: flex; flex-direction: row-reverse;">
            {{ $cats->links('pagination::bootstrap-4') }}
        </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection