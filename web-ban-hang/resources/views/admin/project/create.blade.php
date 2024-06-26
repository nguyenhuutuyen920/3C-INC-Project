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
                <h1 class="page-header">Project
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
                <form action="{{ route('project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>ProjectTitle</label>
                        <input class="form-control" type="text" name="ProjectTitle" placeholder="Vui lòng nhập tiêu đề dự án"/>
                    </div>                   
                    <div class="form-group">
                        <label>BiddingPackage</label>
                        <input class="form-control" type="text" name="BiddingPackage" placeholder="Vui lòng nhập bí danh dự án"/>
                    </div>
                    <div class="form-group">
                        <label>ConstructionName</label>
                        <input class="form-control" type="text" name="ConstructionName" placeholder="Vui lòng nhập tên công trình dự án"/>
                    </div>
                    <div class="form-group">
                        <label>Abstract</label>
                        <input class="form-control" type="text" name="Abstract" placeholder="Vui lòng nhập từ khóa dự án"/>
                    </div>
                    <div class="form-group">
                        <label>ProjectContent</label>
                        {{-- <div id="toolbar-container"></div>
                        <div id="editor">
                            <textarea class="form-control" type="text" id="editor"  name="NewsContent" placeholder="Vui lòng nhập New Content"></textarea>
                        </div> --}}
                        <textarea class="form-control" type="text" id="editor"  name="ProjectContent" placeholder="Vui lòng nhập nội dung dự án"></textarea>
                    </div>
                    <div class="form-group">
                        <label>ProjectImage</label>
                        <input class="form-control" type="file" name="ProjectImage" placeholder="Vui lòng nhập hình ảnh dự án"/>
                    </div>
                    <div class="form-group">
                        <label>Investors</label>
                        <input class="form-control" type="text" name="Investors" placeholder="Vui lòng nhập chủ đầu tư dự án"/>
                    </div>
                    <div class="form-group">
                        <label>PricePackage</label>
                        <input class="form-control" type="number" name="PricePackage" placeholder="Vui lòng nhập giá trị dự án">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm dự án</button>
                    <button type="reset" class="btn btn-default">đặt lại</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@section('javascript')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.projectupload', ['_token' => csrf_token()]) }}"
                }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
</body>
</html>