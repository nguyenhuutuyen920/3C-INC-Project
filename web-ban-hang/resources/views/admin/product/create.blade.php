@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
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
                    <label>Tiêu Đề Sản Phẩm</label>
                    <input class="form-control" type="text" name="ProductPageTitle" placeholder="Vui lòng nhập Tiêu Đề Sản Phẩm " />
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
                    <label>Thông Tin Vận Tải</label>
                    <input class="form-control" type="text" name="TransportInformation" placeholder="Vui lòng nhập Thông Tin Vận Tải " />
                </div>
                <div class="form-group">
                    <label>Tin Tức Liên Quan</label>
                    <input class="form-control" type="text" name="RelatedNews" placeholder="Vui lòng nhập Tin Tức Liên Quan " />
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Liên Quan</label>
                    <input class="form-control" type="text" name="RelatedProduct" placeholder="Vui lòng nhập Sản Phẩm Liên Quan " />
                </div>
                <div class="form-group">
                    <label>Xem Thứ Tự</label>
                    <input class="form-control" type="text" name="ViewOder" placeholder="Vui lòng nhập Xem Thứ Tự " />
                </div>
                <div class="form-group">
                    <label>Điển Hình</label>
                    <input class="form-control" type="text" name="IsTypical" placeholder="Vui lòng nhập Điển Hình " />
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Hot</label>
                    <input class="form-control" type="text" name="IsHotProduct" placeholder="Vui lòng nhập Sản Phẩm Hot " />
                </div>
                <div class="form-group">
                    <label>Đang Khuyến Mãi</label>
                    <input class="form-control" type="text" name="IsPromotion" placeholder="Vui lòng nhập Đang Khuyến Mãi " />
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Bán Chạy</label>
                    <input class="form-control" type="text" name="IsBestSeller" placeholder="Vui lòng nhập Sản Phẩm Bán Chạy " />
                </div>
                <div class="form-group">
                    <label>Sản Phẩm Hàng Tuần</label>
                    <input class="form-control" type="text" name="IsWeeklyProduct" placeholder="Vui lòng nhập Sản Phẩm Hàng Tuần " />
                </div>
                <div class="form-group">
                    <label>Được Phê Duyệt</label>
                    <input class="form-control" type="text" name="IsApproved" placeholder="Vui lòng nhập Is Approved " />
                </div>
                <div class="form-group">
                    <label>Được Chấp Nhận Bởi</label>
                    <input class="form-control" type="text" name="ApprovedBy" placeholder="Vui lòng nhập Được Chấp Nhận Bởi " />
                </div>
                <div class="form-group">
                    <label>Xem thời Gian</label>
                    <input class="form-control" type="text" name="ViewTime" placeholder="Vui lòng nhập Xem thời Gian " />
                </div>
                <button type="submit" class="btn btn-success">Product Add</button>
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