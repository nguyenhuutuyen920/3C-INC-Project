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
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table ">
            <thead>
                <tr>
                    <th>Category_ID</th>
                    <th>FieldParentID</th>
                    <th>Customer_ParentID</th>
                    <th>Category_Name</th>
                    <th>Category_Alias</th>
                    <th>Category_PageTitle</th>
                    <th>Category_metaKeyword</th>
                    <th>Category_MetaDescription</th>
                    <th>ViewOrder</th>
                    <th>IsVisible</th>
                    <th>IsTypical</th>
                    <th>TypeicalImage</th>
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
                        <td>{{ $cat->CategoryPageTitle}}</td>
                        <td>{{ $cat->CategoryMetaKeyword}}</td>
                        <td>{{ $cat->CategoryMetaDescription}}</td>
                        <td>{{ $cat->ViewOrder}}</td>
                        <td>{{ $cat->IsVisible}}</td>
                        <td>{{ $cat->IsTypical}}</td>
                        <td>{{ $cat->TypeicalImage}}</td>
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection