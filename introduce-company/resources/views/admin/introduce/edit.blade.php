@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Introduce
                    <small>{{$introduce->CategoryName}}</small>
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
                <form action="{{ route('introduce.update', $introduce->IntroduceID)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>TabID</label>
                        <select class="form-control" name="TabID">
                            @foreach($tabs as $tab)
                                <option value="{{$tab->TabID}}">{{$tab->TabID}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>IntroducePageTitle</label>
                        <input class="form-control" name="IntroducePageTitle" value="{{ $introduce->IntroducePageTitle}}" />
                    </div>
                    <div class="form-group">
                        <label>IntroduceAlias</label>
                        <input class="form-control" type="text" name="IntroduceAlias" value="{{ $introduce->IntroduceAlias}}" />
                    </div>                   
                    <div class="form-group">
                        <label>IntroduceMetaKeyword</label>
                        <input class="form-control" type="text" name="IntroduceMetaKeyword" value="{{ $introduce->IntroduceMetaKeyword}}" />
                    </div>
                    <div class="form-group">
                        <label>IntroduceMetaDescription</label>
                        <input class="form-control" type="text" name="IntroduceMetaDescription" value="{{ $introduce->IntroduceMetaDescription}}" />
                    </div>
                    <div class="form-group">
                        <label>IntroduceImage</label>
                        <input class="form-control" type="file" name="IntroduceImage" value="{{ $introduce->IntroduceImage}}" />
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="Title" value="{{ $introduce->Title}}" />
                    </div>
                    <div class="form-group">
                        <label>IntroduceAbtract</label>
                        <input class="form-control" type="text" name="IntroduceAbtract" value="{{ $introduce->IntroduceAbtract}}" />
                    </div>
                    <div class="form-group">
                        <label>IntroduceContent</label>
                        <input class="form-control" type="text" name="IntroduceContent" value="{{ $introduce->IntroduceContent}}" />
                    </div>
                    <div class="form-group">
                        <label>ViewOrder</label>
                        <input class="form-control" type="number" name="ViewOrder" value="{{ $introduce->ViewOrder}}" />
                    </div>
                    <div class="form-group">
                        <label>IsTypical</label>
                        <input class="form-control" type="text" name="IsTypical" value="{{ $introduce->IsTypical}}" />
                    </div>

                    <button type="submit" class="btn btn-default">Introduce Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection