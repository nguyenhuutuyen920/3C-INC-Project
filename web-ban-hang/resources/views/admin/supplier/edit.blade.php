<!DOCTYPE html>
<html>
<head>
    {{-- <script src="admin_asset/ckeditor5/ckeditor.js"></script> --}}

    <style type="text/css">
        #editor {
            height: 500px;
        }
    </style>
</head>
<body>
@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Supplier
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
                <form action="{{ route('supplier.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>                               
                    <div class="form-group">
                        <label>ID Danh Mục</label>
                        <select class="form-control" name="CategoryID" id="subcate_id">
                            @foreach($cats as $cat)
                                <option 
                                @if($supplier->CategoryID == $cat->CategoryID)
                                    {{"selected"}}
                                @endif
                                value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bí Danh Hãng</label>
                        <input class="form-control" type="text" value="{{$supplier->SupplierAlias}}" name="SupplierAlias" placeholder="Vui lòng nhập bí danh hãng"/>
                    </div>
                    <div class="form-group">
                        <label>Từ Khóa Hãng</label>
                        <input class="form-control" type="text" value="{{$supplier->SupplierMetaKeyword}}" name="SupplierMetaKeyword" placeholder="Vui lòng nhập từ khóa hãng"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh Hãng</label>
                        <input class="form-control" type="file" value="{{$supplier->SupplierImage}}" name="SupplierImage" placeholder="Vui lòng nhập hình ảnh hãng"/>
                    </div>
                    <div class="form-group">
                        <label>Mô Tả Hãng</label>
                        <input class="form-control" type="text" value="{{$supplier->SupplierMetaDescription}}" name="SupplierMetaDescription" placeholder="Vui lòng nhập mô tả hãng"/>
                    </div>
                    <div class="form-group">
                        <label>Tên Hãng</label>
                        <input class="form-control" type="text" value="{{$supplier->SupplierName}}" name="SupplierName" placeholder="Vui lòng nhập tên hãng">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm hãng</button>
                    <button type="reset" class="btn btn-default">đặt lại</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
</body>
</html>