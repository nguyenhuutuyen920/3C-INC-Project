@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
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
                <form action="{{ route('user.store')}}" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>FullName</label>
                        <input class="form-control" name="FullName" placeholder="Please Enter FullName" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="Email"  placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input  class="form-control" name="Password" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Sex</label>
                        <label class="radio-inline">
                            <input name="Sex" value="1" checked="" type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="Sex" value="0" type="radio">Nữ
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input  class="form-control" name="Mobile" placeholder="Please Enter Mobile" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea   class="form-control" name="Address" rows="3" placeholder="Please Enter Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>IsSystemAdmin</label>
                        <label class="radio-inline">
                            <input name="IsSystemAdmin" value="0" checked="" type="radio">member
                        </label>
                        <label class="radio-inline">
                            <input name="IsSystemAdmin" value="1" type="radio">Admin
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-default">User Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection