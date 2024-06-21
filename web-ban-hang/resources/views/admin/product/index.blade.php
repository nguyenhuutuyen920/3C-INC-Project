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
                <h1 class="page-header">Product
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
                        <th>ID Sản Phẩm</th>
                        <th>ID Danh Mục</th>
                        <th>ID Hãng</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Bí Danh Sản Phẩm</th>
                        <th>Từ Khóa Sản Phẩm</th>
                        <th>Hình Ảnh Sản Phẩm</th>
                        <th>Giá Tiền Hiện Tại</th>
                        <th>Giá Tiền Cũ</th>
                        <th>Hiển Thị Giá Tiền</th>
                        <th>Giảm Giá</th>
                        <th>Trạng Thái</th>
                        <th>Tóm Tắt</th>
                        <th>Nội Dung Sản Phẩm</th>
                        <th>Nội Dung Khác</th>
                        <th>Khuyến Mãi</th>
                        <th>Sản Phẩm Liên Quan</th>
                        <th>Xóa</th>
                        <th>Chỉnh Sửa</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $prod)
                    <tr class="odd gradeX" align="center">
                        <td>{{$prod->ProductID}}</td>
                        <td>{{$prod->CategoryParentID}}</td>
                        <td>{{$prod->SupplierID}}</td>
                        <td>{{$prod->ProductCode}}</td>
                        <td>{{$prod->ProductName}}</td>
                        <td>{{$prod->ProductAlias}}</td>
                        <td>{{$prod->ProductKeyword}}</td>
                        <td>
                            <img src="{{ asset($prod->ProductImage) }}" width="150">
                        </td>
                        <td>{{$prod->CurentPrice}}</td>
                        <td>{{$prod->OldPrice}}</td>
                        <td>{{$prod->IsShowprice}}</td>
                        <td>{{$prod->Discount}}</td>
                        <td>{{$prod->StoreStatus}}</td>
                        <td>{{$prod->Abstract}}</td>
                        <td>{{$prod->ProductContent}}</td>
                        <td>{{$prod->OtherContent}}</td>
                        <td>{{$prod->Promotion}}</td>
                        <td>{{$prod->RelatedProduct}}</td>
                        <td class="center">
                            <form action="{{ route('product.destroy',$prod->ProductID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('product.edit',$prod->ProductID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-user" style="display: flex; flex-direction: row-reverse;">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection