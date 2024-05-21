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
                        <th>ProductID</th>
                        <th>TabID</th>
                        <th>SupplierID</th>
                        <th>MaterialID</th>
                        <th>ProductCode</th>
                        <th>ProductName</th>
                        <th>ProductAlias</th>
                        <th>ProductPageTitle</th>
                        <th>ProductMetaKeyword</th>
                        <th>ProductMetaDescription</th>
                        <th>ProductImage</th>
                        <th>CurentPrice</th>
                        <th>OldPrice</th>
                        <th>IsShowprice</th>
                        <th>Discount</th>
                        <th>StoreStatus</th>
                        <th>Abstract</th>
                        <th>ProductContent</th>
                        <th>OtherContent</th>
                        <th>Promotion</th>
                        <th>TransportInformation</th>
                        <th>RelatedNews</th>
                        <th>RelatedProduct</th>
                        <th>ViewOder</th>
                        <th>IsTypical</th>
                        <th>IsHotProduct</th>
                        <th>IsPromotion</th>
                        <th>IsEnjoyProduct</th>
                        <th>IsBestSeller</th>
                        <th>IsWeeklyProduct</th>
                        <th>IsApproved</th>
                        <th>ApprovedBy</th>
                        <th>ViewTime</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $prod)
                    <tr class="odd gradeX" align="center">
                        <td>{{$prod->ProductID}}</td>
                        <td>{{$prod->TabID}}</td>
                        <td>{{$prod->SupplierID}}</td>
                        <td>{{$prod->MaterialID}}</td>
                        <td>{{$prod->ProductCode}}</td>
                        <td>{{$prod->ProductName}}</td>
                        <td>{{$prod->ProductAlias}}</td>
                        <td>{{$prod->ProductPageTitle}}</td>
                        <td>{{$prod->ProductMetaKeyword}}</td>
                        <td>{{$prod->ProductMetaDescription}}</td>
                        <td>{{$prod->ProductImage}}</td>
                        <td>{{$prod->CurentPrice}}</td>
                        <td>{{$prod->OldPrice}}</td>
                        <td>{{$prod->IsShowprice}}</td>
                        <td>{{$prod->Discount}}</td>
                        <td>{{$prod->StoreStatus}}</td>
                        <td>{{$prod->Abstract}}</td>
                        <td>{{$prod->ProductContent}}</td>
                        <td>{{$prod->OtherContent}}</td>
                        <td>{{$prod->Promotion}}</td>
                        <td>{{$prod->TransportInformation}}</td>
                        <td>{{$prod->RelatedNews}}</td>
                        <td>{{$prod->RelatedProduct}}</td>
                        <td>{{$prod->ViewOder}}</td>
                        <td>{{$prod->IsTypical}}</td>
                        <td>{{$prod->IsHotProduct}}</td>
                        <td>{{$prod->IsPromotion}}</td>
                        <td>{{$prod->IsEnjoyProduct}}</td>
                        <td>{{$prod->IsBestSeller}}</td>
                        <td>{{$prod->IsWeeklyProduct}}</td>
                        <td>{{$prod->IsApproved}}</td>
                        <td>{{$prod->ApprovedBy}}</td>
                        <td>{{$prod->ViewTime}}</td>
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection