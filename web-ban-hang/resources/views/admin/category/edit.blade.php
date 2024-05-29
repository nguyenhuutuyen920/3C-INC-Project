@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>{{$category->CategoryName}}</small>
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
                <form action="{{ route('category.update', $category->CategoryID)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>FieldParentID</label>
                        <select class="form-control" name="FieldParentID" id="subcate_id">
                            @foreach($fields as $field)
                                <option 
                                @if($category->FieldParentID == $field->FieldParentID)
                                    {{"selected"}}
                                @endif
                                value="{{$field->FieldParentID}}">{{$field->FieldName}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        
                        <label>Category Parent ID</label>
                        <input class="form-control" name="CategoryParentID"  value="{{ $category->CategoryParentID}}" />
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="CategoryName" value="{{ $category->CategoryName}}" />
                    </div>
                    <div class="form-group">
                        <label>Category Alias</label>
                        <input class="form-control" type="text" name="CategoryAlias" value="{{ $category->CategoryAlias}}" />
                    </div>                   
                    <div class="form-group">
                        <label>Category Page Title</label>
                        <input class="form-control" type="text" name="CategoryPageTitle" value="{{ $category->CategoryPageTitle}}" />
                    </div>
                    <div class="form-group">
                        <label>Category MetaKeyword</label>
                        <input class="form-control" type="text" name="CategoryMetaKeyword" value="{{ $category->CategoryMetaKeyword}}" />
                    </div>
                    <div class="form-group">
                        <label>Category MetaDescription</label>
                        <input class="form-control" type="text" name="CategoryMetaDescription" value="{{ $category->CategoryMetaDescription}}" />
                    </div>
                    <div class="form-group">
                        <label>ViewOrder</label>
                        <input class="form-control" type="number" min="0" max="1" name="ViewOrder" value="{{ $category->ViewOrder}}" />
                    </div>
                    <div class="form-group">
                        <label>IsVisible</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsVisible" value="{{ $category->IsVisible}}" />
                    </div>
                    <div class="form-group">
                        <label>IsVisible</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsTypical" value="{{ $category->IsVisible}}" />
                    </div>
                    <div class="form-group">
                        <label>Typical Image</label>
                        <input class="form-control" type="number" min="0" max="1" name="TypicalImage" value="{{ $category->TypicalImage}}" />
                    </div>

                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection