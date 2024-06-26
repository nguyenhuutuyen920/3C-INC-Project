@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Project
                    <small>{{$project->ProjectTitle}}</small>
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
                <form action="{{ route('project.update', $project->ProjectID)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label>Tiêu đề dự án</label>
                        <input class="form-control" type="text" value="{{ $project->ProjectTitle}}" name="ProjectTitle" placeholder="Please Enter Introduce Page Title"/>
                    </div>                   
                    <div class="form-group">
                        <label>Gói thầu</label>
                        <input class="form-control" type="text" value="{{ $project->BiddingPackage}}" name="BiddingPackage" placeholder="Please Enter Introduce Alias"/>
                    </div>
                    <div class="form-group">
                        <label>Tên Công trình</label>
                        <input class="form-control" type="text" value="{{ $project->ConstructionName}}" name="ConstructionName" placeholder="Please Enter Introduce Keyword"/>
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <input class="form-control" type="text" value="{{ $project->Abstract}}" name="Abstract" placeholder="Please Enter Introduce Keyword"/>
                    </div>
                    <div class="form-group">
                        <label>Nội dung dự án</label>
                        <input class="form-control" type="text" value="{{ $project->ProjectContent}}" name="ProjectContent" placeholder="Please Enter Introduce Description"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh dự án</label>
                        <input class="form-control" type="file" value="{{ $project->ProjectImage}}" name="ProjectImage" placeholder="Please Enter Introduce Image"/>
                    </div>
                    <div class="form-group">
                        <label>Chủ đầu tư</label>
                        <input class="form-control" type="text" value="{{ $project->Investors}}" name="Investors" placeholder="Please Enter Title"/>
                    </div>
                    <div class="form-group">
                        <label>Giá gói thầu</label>
                        <textarea class="form-control" type="text"name="PricePackage" placeholder="Please Enter Introduce Abtract">{{ $project->PricePackage}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Chỉnh sửa dự án</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection