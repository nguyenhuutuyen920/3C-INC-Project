@extends('admin.index')
@section('content')
<script type="text/javascript">
function kiemtra () {
    // body...
    if (!window.confirm("DỮ LIỆU SẼ BỊ XÓA VĨNH VIỄN. BẠN CÓ MUỐN TIẾP TỤC?")) {
        return false;
    };
}
</script>
<div id="page-wrapper">
    <div class="container-fluid"  style="width:100%; overflow:auto;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản người dùng   
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Tên Tài Khoản</th>
                    <th>Giới Tính</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Mật Khẩu</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td>{{ $user->UserID}}</td>
                        <td>{{ $user->Email}}</td>
                        <td>{{ $user->FullName}}</td>
                        <td>{{ $user->Sex}}</td>
                        <td>{{ $user->Mobile}}</td>
                        <td>{{ $user->Address}}</td>
                        <td>{{ $user->Password}}</td>
                        <td class="center">
                            <form action="{{ route('user.destroy',$user->UserID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('user.edit',$user->UserID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <div class="pagination-user" style="display: flex; flex-direction: row-reverse;">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection