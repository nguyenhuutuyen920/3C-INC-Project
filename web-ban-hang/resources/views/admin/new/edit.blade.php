<!DOCTYPE html>
<html>
<head>
    <title>Laravel CkEditor5 Image Upload Web tech Knowledge</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
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
                <h1 class="page-header">News
                    <small>edit</small>
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
            <form action="{{ route('new.update',$new->NewsID)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>News Alias</label>
                    <input class="form-control" type="text" value="{{ $new->NewsAlias}}" name="NewsAlias" placeholder="Please Enter New ALias"/>
                </div>                   
                <div class="form-group">
                    <label>News MetaKeyword</label>
                    <input class="form-control" type="text" value="{{ $new->NewsMetaKeyword}}" name="NewsMetaKeyword" placeholder="Please Enter New News MetaKeyword"/>
                </div>
                <div class="form-group">
                    <label>News MetaDescription</label>
                    <input class="form-control" type="text" value="{{ $new->NewsMetaDescription}}" name="NewsMetaDescription" placeholder="Please Enter News MetaDescription"/>
                </div>
                <div class="form-group">
                    <label>News Title</label>
                    <input class="form-control" type="text" value="{{ $new->NewsTitle}}" name="NewsTitle" placeholder="Please Enter New Title"/>
                </div>
                <div class="form-group">
                    <label>News Image</label>
                    <input class="form-control" type="file" value="{{ $new->NewsImage}}" name="NewsImage" />
                </div>
                <div class="form-group">
                    <label>Abstract</label>
                    <input class="form-control" type="text" value="{{ $new->Abstract}}" name="Abstract" placeholder="Please Enter New Abstract"/>
                </div>
                <div class="form-group">
                    <label>News Content</label>
                    <textarea class="form-control" type="text" id="editor" name="NewsContent" placeholder="Please Enter New Content">{{ $new->NewsContent}}</textarea>
                </div>
                <div class="form-group">
                    <label>News Source</label>
                    <input class="form-control" type="text" value="{{ $new->NewsSource}}" name="NewsSource" placeholder="Please Enter New Source"/>
                </div>
                <div class="form-group">
                    <label>View Time</label>
                    <input class="form-control" type="text" value="{{ $new->ViewTime}}" name="ViewTime" placeholder="Please Enter View Time "/>
                </div>
                <div class="form-group">
                    <label>Related News</label>
                    <input class="form-control" type="text" value="{{ $new->RelatedNews}}" name="RelatedNews" placeholder="Please Related News "/>
                </div>
                <div class="form-group">
                    <label>View Order</label>
                    <input class="form-control" type="number" value="{{ $new->ViewOrder}}" name="ViewOrder" placeholder="Please Enter View Order "/>
                </div>
                <div class="form-group">
                    <label>IsHotNews</label>
                    <input class="form-control" type="text" value="{{ $new->IsHotNews}}" name="IsHotNews" placeholder="Please Enter IsHotNews "/>
                </div>
                <div class="form-group">
                    <label>IsTypical</label>
                    <input class="form-control" type="text" value="{{ $new->IsTypical}}" name="IsTypical" placeholder="Please Enter IsTypical "/>
                </div>
                <div class="form-group">
                    <label>IsApproved</label>
                    <input class="form-control" type="text" value="{{ $new->IsApproved}}" name="IsApproved" placeholder="Please Enter IsApproved "/>
                </div>
                <div class="form-group">
                    <label>ApprovedBy</label>
                    <input class="form-control" type="text" value="{{ $new->ApprovedBy}}" name="ApprovedBy" placeholder="Please Enter ApprovedBy "/>
                </div>
                
                <button type="submit" class="btn btn-default">Edit Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
{{-- @endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
</body>
</html>
