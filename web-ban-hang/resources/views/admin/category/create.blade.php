@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>thêm</small>
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
                        <label>Trường lĩnh vực</label>
                        <select class="form-control" name="FieldParentID" id="subcate_id">
                            @foreach($fields as $field)
                                <option 
                                value="{{$field->FieldParentID}}">{{$field->FieldName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Parent ID</label>
                        <input class="form-control" name="CategoryParentID" placeholder="Vui lòng nhập Parent ID" />
                    </div>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="CategoryName" placeholder="Vui lòng nhập Tên danh mục" />
                    </div>
                    <div class="form-group">
                        <label>Bí danh danh mục</label>
                        <input class="form-control" type="text" name="CategoryAlias" placeholder="Vui lòng nhập Bí danh danh mục"/>
                    </div>                   
                    <div class="form-group">
                        <label>Từ khóa danh mục</label>
                        <input class="form-control" type="text" name="CategoryMetaKeyword" placeholder="Vui lòng nhập Từ khóa danh mục"/>
                    </div>
                    <div class="form-group">
                        <label>Mô tả danh mục</label>
                        <input class="form-control" type="text" name="CategoryMetaDescription" placeholder="Vui lòng nhập Mô tả danh mục"/>
                    </div>
                    <div class="form-group">
                        <label>Có thể thấy</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsVisible" placeholder="Vui lòng nhập Có thể thấy"/>
                    </div>
                    <div class="form-group">
                        <label>không điển hình</label>
                        <input class="form-control" type="number" min="0" max="1" name="IsTypical" placeholder="Vui lòng nhập không điển hình"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh điển hình</label>
                        <input class="form-control" type="file" name="TypicalImage" placeholder="Vui lòng nhập Hình ảnh điển hình"/>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm danh mục</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection