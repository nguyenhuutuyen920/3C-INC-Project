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
                <form action="{{ route('introduce.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Introduce Page Title</label>
                        <input class="form-control" type="text" name="IntroducePageTitle" placeholder="Please Enter Introduce Page Title"/>
                    </div>                   
                    <div class="form-group">
                        <label>Introduce Alias</label>
                        <input class="form-control" type="text" name="IntroduceAlias" placeholder="Please Enter Introduce Alias"/>
                    </div>
                    <div class="form-group">
                        <label>Introduce MetaKeyword</label>
                        <input class="form-control" type="text" name="IntroduceMetaKeyword" placeholder="Please Enter Introduce Keyword"/>
                    </div>
                    <div class="form-group">
                        <label>Introduce MetaDescription</label>
                        <input class="form-control" type="text" name="IntroduceMetaDescription" placeholder="Please Enter Introduce Description"/>
                    </div>
                    <div class="form-group">
                        <label>IntroduceImage</label>
                        <input class="form-control" type="file" name="IntroduceImage" placeholder="Please Enter Introduce Image"/>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="Title" placeholder="Please Enter Title"/>
                    </div>
                    <div class="form-group">
                        <label>Introduce Abtract</label>
                        <textarea class="form-control" type="text" name="IntroduceAbtract" placeholder="Please Enter Introduce Abtract"></textarea>
                    </div>
                    <div class="form-group">
                        <label>IntroduceContent</label>
                        <textarea class="form-control" type="text" name="IntroduceContent" placeholder="Please Enter Introduce Content"></textarea>
                    </div>
                    <div class="form-group">
                        <label>ViewOrder</label>
                        <input class="form-control" type="number" name="ViewOrder" placeholder="Please Enter ViewOrder"/>
                    </div>
                    <div class="form-group">
                        <label>IsTypical</label>
                        <input class="form-control" type="text" name="IsTypical" placeholder="Please Enter IsTypical"/>
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