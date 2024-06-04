<!DOCTYPE html>
<html>
<head>
    <title>Laravel CkEditor5 Image Upload Web tech Knowledge</title>
    {{-- <script src="admin_asset/ckeditor5/ckeditor.js"></script> --}}

    <style type="text/css">
        .editor {
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
                        <input class="form-control" type="text" name="NewsAlias" placeholder="Please Enter New ALias"/>
                    </div>                   
                    <div class="form-group">
                        <label>News MetaKeyword</label>
                        <input class="form-control" type="text" name="NewsMetaKeyword" placeholder="Please Enter New News MetaKeyword"/>
                    </div>
                    <div class="form-group">
                        <label>News MetaDescription</label>
                        <input class="form-control" type="text" name="NewsMetaDescription" placeholder="Please Enter News MetaDescription"/>
                    </div>
                    <div class="form-group">
                        <label>News Title</label>
                        <input class="form-control" type="text" name="NewsTitle" placeholder="Please Enter New Title"/>
                    </div>
                    <div class="form-group">
                        <label>News Image</label>
                        <input class="form-control" type="file" name="NewsImage" placeholder="Please Enter New Title"/>
                    </div>
                    <div class="form-group">
                        <label>Abstract</label>
                        <input class="form-control" type="text" name="Abstract" placeholder="Please Enter New Abstract"/>
                    </div>
                    <div class="form-group">
                        <label>News Content</label>
                        {{-- <div id="toolbar-container"></div>
                        <div id="editor">
                            <textarea class="form-control" type="text" id="editor"  name="NewsContent" placeholder="Please Enter New Content"></textarea>
                        </div> --}}
                        <textarea class="form-control" type="text" id="editor"  name="NewsContent" placeholder="Please Enter New Content"></textarea>

                    </div>
                    <div class="form-group">
                        <label>News Source</label>
                        <input class="form-control" type="text" name="NewsSource" placeholder="Please Enter New Source"/>
                    </div>
                    <div class="form-group">
                        <label>View Time</label>
                        <input class="form-control" type="text" name="ViewTime" placeholder="Please Enter View Time "/>
                    </div>
                    <div class="form-group">
                        <label>Related News</label>
                        <input class="form-control" type="text" name="RelatedNews" placeholder="Please Related News "/>
                    </div>
                    <div class="form-group">
                        <label>View Order</label>
                        <input class="form-control" type="number" name="ViewOrder" placeholder="Please Enter View Order "/>
                    </div>
                    <div class="form-group">
                        <label>IsHotNews</label>
                        <input class="form-control" type="text" name="IsHotNews" placeholder="Please Enter IsHotNews "/>
                    </div>
                    <div class="form-group">
                        <label>IsTypical</label>
                        <input class="form-control" type="text" name="IsTypical" placeholder="Please Enter IsTypical "/>
                    </div>
                    <div class="form-group">
                        <label>IsApproved</label>
                        <input class="form-control" type="text" name="IsApproved" placeholder="Please Enter IsApproved "/>
                    </div>
                    <div class="form-group">
                        <label>ApprovedBy</label>
                        <input class="form-control" type="text" name="ApprovedBy" placeholder="Please Enter ApprovedBy "/>
                    </div>
                    
                    <button type="submit" class="btn btn-default">News Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
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
<<<<<<< Updated upstream
        })
        .catch( error => {
            console.error( error );
        } );
</script>
=======
            })
            // .then(editor => {
            //     const toolbarContainer = document.querySelector('#toolbar-container');
            //     toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            // })
            .catch(error => {
                console.error(error);
            });
    </script>
>>>>>>> Stashed changes
@endsection
</body>
</html>