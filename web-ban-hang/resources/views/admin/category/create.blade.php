@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
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
                <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <div class="form-group">
                            <label>FieldParentID</label>
                            <select class="form-control" name="FieldParentID" id="subcate_id">
                            @foreach($fields as $field)
                                <option 
                                 value="{{$field->FieldParentID}}">{{$field->FieldName}}</option>
                            @endforeach
                            </select>
                        </div>
                        <label>Category Parent ID</label>
                        <input class="form-control" name="CategoryParentID" placeholder="Please Enter Category Parent ID" />
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="CategoryName" placeholder="Please Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label>Category Alias</label>
                        <input class="form-control" type="text" name="CategoryAlias" placeholder="Please Enter Category ALias"/>
                    </div>                   
                    <div class="form-group">
                        <label>Category MetaKeyword</label>
                        <input class="form-control" type="text" name="CategoryMetaKeyword" placeholder="Please Enter Category Keyword"/>
                    </div>
                    <div class="form-group">
                        <label>Category MetaDescription</label>
                        <input class="form-control" type="text" name="CategoryMetaDescription" placeholder="Please Enter Category Description"/>
                    </div>
                    <div class="form-group">
                        <label>IsVisible</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsVisible" placeholder="Please Enter Category IsVisible"/>
                    </div>
                    <div class="form-group">
                        <label>Istypical</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsTypical" placeholder="Please Enter Category IsTypical"/>
                    </div>
                    <div class="form-group">
                        <label>Typical Image</label>
                        <input class="form-control" type="file" name="TypicalImage" placeholder="Please Enter Category Typical Image"/>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Category Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection