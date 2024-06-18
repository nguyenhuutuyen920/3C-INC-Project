<!DOCTYPE html>
<html>
<head>
    {{-- <script src="admin_asset/ckeditor5/ckeditor.js"></script> --}}

</head>
<body>
@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New
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
                <form action="{{ route('new.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>News Alias</label>
                        <input class="form-control" type="text" name="NewsAlias" placeholder="Vui lòng nhập tin tức bí danh"/>
                    </div>                   
                    <div class="form-group">
                        <label>News MetaKeyword</label>
                        <input class="form-control" type="text" name="NewsMetaKeyword" placeholder="Vui lòng nhập từ khóa tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>News MetaDescription</label>
                        <input class="form-control" type="text" name="NewsMetaDescription" placeholder="Vui lòng nhập miêu tả tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>News Title</label>
                        <input class="form-control" type="text" name="NewsTitle" placeholder="Vui lòng nhập tiêu đề tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>News Image</label>
                        <input class="form-control" type="file" name="NewsImage" placeholder="Vui lòng nhập hình ảnh tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>Abstract</label>
                        <input class="form-control" type="text" name="Abstract" placeholder="Vui lòng nhập tóm tắt tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>News Content</label>
                        {{-- <div id="toolbar-container"></div>
                        <div id="editor">
                            <textarea class="form-control" type="text" id="editor"  name="NewsContent" placeholder="Vui lòng nhập tin tức Content"></textarea>
                        </div> --}}
                        <textarea class="form-control" type="text" id="editor" style="height: 500px"  name="NewsContent" placeholder="Vui lòng nhập nội dung tin tức (Lưu ý kích thước của ảnh khi cho vào)"></textarea>

                    </div>
                    <div class="form-group">
                        <label>News Source</label>
                        <input class="form-control" type="text" name="NewsSource" placeholder="Vui lòng nhập nguồn tin tức"/>
                    </div>
                    <div class="form-group">
                        <label>View Time</label>
                        <input class="form-control" type="text" name="ViewTime" placeholder="Vui lòng nhập thời gian xem tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>Related News</label>
                        <input class="form-control" type="text" name="RelatedNews" placeholder="Vui lòng nhập tin tức khác"/>
                    </div>
                    <div class="form-group">
                        <label>View Order</label>
                        <input class="form-control" type="number" name="ViewOrder" placeholder="Vui lòng nhập tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>IsHotNews</label>
                        <input class="form-control" type="text" name="IsHotNews" placeholder="Vui lòng nhập tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>IsTypical</label>
                        <input class="form-control" type="text" name="IsTypical" placeholder="Vui lòng nhập tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>IsApproved</label>
                        <input class="form-control" type="text" name="IsApproved" placeholder="Vui lòng nhập tin tức "/>
                    </div>
                    <div class="form-group">
                        <label>ApprovedBy</label>
                        <input class="form-control" type="text" name="ApprovedBy" placeholder="Vui lòng nhập tin tức "/>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm tin tức</button>
                    <button type="reset" class="btn btn-default">đặt lại</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
</body>
</html>