@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản Phẩm
                    <small>Create</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
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
            <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label>ID Danh Mục</label>
                    <select class="form-control" name="CategoryParentID" id="subcate_id">
                        @foreach($cats as $cat)
                            <option 
                            value="{{$cat->CategoryParentID}}">{{$cat->CategoryName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>ID Hãng</label>
                    <select class="form-control" name="SupplierID" >
                        <option value="0">Không có hãng nào</option>
                        @foreach($supps as $supp)
                            <option 
                            value="{{$supp->id}}">{{$supp->SupplierName}}</option>
                        @endforeach
                    </select>
                </div>            
                <div class="form-group">
                    <label>Mã Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductCode" placeholder="Vui lòng nhập Mã Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductName" placeholder="Vui lòng nhập Tên Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Bí Danh Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductAlias" placeholder="Vui lòng nhập Bí Danh Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Từ Khóa Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductMetaKeyword" placeholder="Vui lòng nhập Từ Khóa Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Mô tả Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductMetaDescription" placeholder="Vui lòng nhập Mô tả Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Hình Ảnh Sản Phẩm</label>
                    <input class="form-control" type="file" name="ProductImage" placeholder="Vui lòng nhập Hình Ảnh Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Giá Tiền Hiện Tại</label>
                    <input class="form-control" type="text" name="CurentPrice" placeholder="Vui lòng nhập Giá Tiền Hiện Tại " />
                </div>
                <div class="form-group">
                    <label>Giá Tiền Cũ</label>
                    <input class="form-control" type="text" name="OldPrice" placeholder="Vui lòng nhập Giá Tiền Cũ" />
                </div>
                <div class="form-group">
                    <label>Hiển Thị Giá Tiền</label>
                    <input class="form-control" type="text" name="IsShowprice" placeholder="Vui lòng nhập Hiển Thị Giá Tiền " />
                </div>
                <div class="form-group">
                    <label>Giảm Giá</label>
                    <input class="form-control" type="text" name="Discount" placeholder="Vui lòng nhập Giảm Giá " />
                </div>
                <div class="form-group">
                    <label>Trạng Thái</label>
                    <input class="form-control" type="text" name="StoreStatus" placeholder="Vui lòng nhập Trạng Thái " />
                </div>
                <div class="form-group">
                    <label>Tóm Tắt</label>
                    <input class="form-control" type="text" name="Abstract" placeholder="Vui lòng nhập Tóm Tắt " />
                </div>
                <div class="form-group">
                    <label>Nội Dung Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductContent" placeholder="Vui lòng nhập Nội Dung Sản Phẩm " />
                </div>
                <div class="form-group">
                    <label>Nội Dung Khác</label>
                    <input class="form-control" type="text" name="OtherContent" placeholder="Vui lòng nhập Nội Dung Khác " />
                </div>
                <div class="form-group">
                    <label>Khuyến Mãi</label>
                    <input class="form-control" type="text" name="Promotion" placeholder="Vui lòng nhập Khuyến Mãi " />
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Liên Quan</label>
                    <input class="form-control" type="text" name="RelatedProduct" placeholder="Vui lòng nhập Sản Phẩm Liên Quan " />
                </div>
                
                <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#cate_id").change(function(){
                var cate_id = $(this).val();
                $.get("admin/ajax/subcate/"+cate_id,function(data){
                    $("#subcate_id").html(data);
                });
            });
            $('.summernote').summernote();
        });
    </script>
@endsection