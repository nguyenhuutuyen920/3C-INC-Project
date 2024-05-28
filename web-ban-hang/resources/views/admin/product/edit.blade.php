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
                        <div class="form-group">
                            <label>ProductParentID</label>
                            <select class="form-control" name="ProductParentID" id="subcate_id">

                                <option 
                                @if($product->ProductParentID == $category->ProductParentID)
                                    {{"selected"}}
                                @endif
                                 value="{{$product->ProductParentID}}">{{$product->ProductName}}</option>

                            </select>
                        </div>
                        <label>SupplierID</label>
                        <input class="form-control" type="text" value="{{ $product->SupplierID }}" name="SupplierID" placeholder="Please Enter Product SupplierID" />
                    </div>
                    <div class="form-group">
                        <label>MaterialID</label>
                        <input class="form-control" type="text" value="{{ $product->MaterialID }}" name="MaterialID" placeholder="Please Enter MaterialID " />
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
                        <label>Product Page Title</label>
                        <input class="form-control" type="text" value="{{ $product->ProductPageTitle }}" name="ProductPageTitle" placeholder="Please Enter Product Page Title " />
                    </div>
                    <div class="form-group">
                        <label>Product Meta Keyword</label>
                        <input class="form-control" type="text" value="{{ $product->ProductMetaKeyword }}" name="ProductMetaKeyword" placeholder="Please Enter Product Meta Keyword " />
                    </div>
                    <div class="form-group">
                        <label>Product Meta Description</label>
                        <input class="form-control" type="text" value="{{ $product->ProductMetaDescription }}" name="ProductMetaDescription" placeholder="Please Enter Product Meta Description " />
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
                        <label>Transport Information</label>
                        <input class="form-control" type="text" value="{{ $product->TransportInformation }}" name="TransportInformation" placeholder="Please Enter Transport Information " />
                    </div>
                    <div class="form-group">
                        <label>Related News</label>
                        <input class="form-control" type="text" value="{{ $product->RelatedNews }}" name="RelatedNews" placeholder="Please Enter Related News " />
                    </div>
                    <div class="form-group">
                        <label>Related Product</label>
                        <input class="form-control" type="text" value="{{ $product->RelatedProduct }}" name="RelatedProduct" placeholder="Please Enter Related Product " />
                    </div>
                    <div class="form-group">
                        <label>ViewOder</label>
                        <input class="form-control" type="text" value="{{ $product->ViewOder }}" name="ViewOder" placeholder="Please Enter ViewOder " />
                    </div>
                    <div class="form-group">
                        <label>IsTypical</label>
                        <input class="form-control" type="text" value="{{ $product->IsTypical }}" name="IsTypical" placeholder="Please Enter IsTypical " />
                    </div>
                    <div class="form-group">
                        <label>IsHotProduct</label>
                        <input class="form-control" type="text" value="{{ $product->IsHotProduct }}" name="IsHotProduct" placeholder="Please Enter IsHotProduct " />
                    </div>
                    <div class="form-group">
                        <label>IsPromotion</label>
                        <input class="form-control" type="text" value="{{ $product->IsPromotion }}" name="IsPromotion" placeholder="Please Enter IsPromotion " />
                    </div>
                    <div class="form-group">
                        <label>IsEnjoy Product</label>
                        <input class="form-control" type="text" value="{{ $product->IsEnjoyProduct }}" name="IsEnjoyProduct" placeholder="Please Enter IsEnjoy Product " />
                    </div>
                    <div class="form-group">
                        <label>IsBest Seller</label>
                        <input class="form-control" type="text" value="{{ $product->IsBestSeller }}" name="IsBestSeller" placeholder="Please Enter IsBest Seller " />
                    </div>
                    <div class="form-group">
                        <label>IsWeekly Product</label>
                        <input class="form-control" type="text" value="{{ $product->IsWeeklyProduct }}" name="IsWeeklyProduct" placeholder="Please Enter IsWeeklyProduct " />
                    </div>
                    <div class="form-group">
                        <label>IsApproved</label>
                        <input class="form-control" type="text" value="{{ $product->IsApproved }}" name="IsApproved" placeholder="Please Enter IsApproved " />
                    </div>
                    <div class="form-group">
                        <label>ApprovedBy</label>
                        <input class="form-control" type="text" value="{{ $product->ApprovedBy }}" name="ApprovedBy" placeholder="Please Enter ApprovedBy " />
                    </div>
                    <div class="form-group">
                        <label>ViewTime</label>
                        <input class="form-control" type="text" value="{{ $product->ViewTime }}" name="ViewTime" placeholder="Please Enter ViewTime " />
                    </div>

                    <button type="submit" class="btn btn-default">Post Edit</button>
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