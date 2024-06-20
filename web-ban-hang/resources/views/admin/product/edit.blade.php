@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>edit</small>


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
                <form action="{{ route('product.update', $product->ProductID)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>CategoryParentID</label>
                        <select class="form-control" name="CategoryParentID" id="subcate_id">
                            @foreach($cats as $cat)
                                <option 
                                @if($product->CategoryParentID == $cat->CategoryParentID)
                                    {{"selected"}}
                                @endif
                                value="{{$cat->CategoryParentID}}">{{$cat->CategoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ID Hãng</label>
                        <select class="form-control" name="SupplierID" >
                            @foreach($supps as $supp)
                                <option 
                                @if($product->SupplierID == $supp->id)
                                    {{"selected"}}
                                @endif
                                value="{{$supp->id}}">{{$supp->SupplierName}}</option>
                            @endforeach
                        </select>
                    </div>             
                    <div class="form-group">
                        <label>Product Code</label>
                        <input class="form-control" type="text" value="{{ $product->ProductCode }}" name="ProductCode" placeholder="Please Enter Product Code " />
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input class="form-control" type="text" value="{{ $product->ProductName }}" name="ProductName" placeholder="Please Enter ProductName " />
                    </div>
                    <div class="form-group">
                        <label>Product Alias</label>
                        <input class="form-control" type="text" value="{{ $product->ProductAlias }}" name="ProductAlias" placeholder="Please Enter Product Alias " />
                    </div>
                    <div class="form-group">
                        <label>Product Meta Keyword</label>
                        <input class="form-control" type="text" value="{{ $product->ProductMetaKeyword }}" name="ProductMetaKeyword" placeholder="Please Enter Product Meta Keyword " />
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input class="form-control" type="file" value="{{ $product->ProductImage }}" name="ProductImage" placeholder="Please Enter Product Image " />
                    </div>
                    <div class="form-group">
                        <label>Curent Price</label>
                        <input class="form-control" type="text" value="{{ $product->CurentPrice }}" name="CurentPrice" placeholder="Please Enter Curent Price " />
                    </div>
                    <div class="form-group">
                        <label>Old Price</label>
                        <input class="form-control" type="text" value="{{ $product->OldPrice }}" name="OldPrice" placeholder="Please Enter Old Price " />
                    </div>
                    <div class="form-group">
                        <label>IsShowprice</label>
                        <input class="form-control" type="text" value="{{ $product->IsShowprice }}" name="IsShowprice" placeholder="Please Enter IsShowprice " />
                    </div>
                    <div class="form-group">
                        <label>Discount</label>
                        <input class="form-control" type="text" value="{{ $product->Discount }}" name="Discount" placeholder="Please Enter Discount " />
                    </div>
                    <div class="form-group">
                        <label>Store Status</label>
                        <input class="form-control" type="text" value="{{ $product->StoreStatus }}" name="StoreStatus" placeholder="Please Enter Store Status " />
                    </div>
                    <div class="form-group">
                        <label>Abstract</label>
                        <input class="form-control" type="text" value="{{ $product->Abstract }}" name="Abstract" placeholder="Please Enter Abstract " />
                    </div>
                    <div class="form-group">
                        <label>Product Content</label>
                        <input class="form-control" type="text" value="{{ $product->ProductContent }}" name="ProductContent" placeholder="Please Enter Product Content " />
                    </div>
                    <div class="form-group">
                        <label>Other Content</label>
                        <input class="form-control" type="text" value="{{ $product->OtherContent }}" name="OtherContent" placeholder="Please Enter Other Content " />
                    </div>
                    <div class="form-group">
                        <label>Promotion</label>
                        <input class="form-control" type="text" value="{{ $product->Promotion }}" name="Promotion" placeholder="Please Enter Promotion " />
                    </div>
                    <div class="form-group">
                        <label>Related Product</label>
                        <input class="form-control" type="text" value="{{ $product->RelatedProduct }}" name="RelatedProduct" placeholder="Please Enter Related Product " />
                    </div>

                    <button type="submit" class="btn btn-default">Chỉnh sửa sản phẩm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
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