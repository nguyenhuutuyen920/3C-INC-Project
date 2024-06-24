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
                <h1 class="page-header">Hãng
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>id</th>
                        <th>CategoryID</th>
                        <th>SupplierAlias</th>
                        <th>SupplierMetaKeyword</th>
                        <th>SupplierMetaDescription</th>
                        <th>SupplierName</th>
                        <th>SupplierImage</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $supp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$supp->id}}</td>
                        <td>{{$supp->CategoryID}}</td>
                        <td>{{$supp->SupplierAlias}}</td>
                        <td>{{$supp->SupplierMetaKeyword}}</td>
                        <td>{{$supp->SupplierMetaDescription}}</td>
                        <td>{!!$supp->SupplierName!!}</td>
                        <td>
                            <img src="{{ asset($supp->SupplierImage) }}" width="150">
                        </td>
                        <td class="center">
                            <form action="{{ route('supplier.destroy',$supp->id)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('supplier.edit',$supp->id) }}" class="btn btn-primary btn-sm">Edit</a>
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