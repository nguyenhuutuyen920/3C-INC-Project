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
    <div class="container-fluid" style="width:100%; overflow:auto;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Project
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ProjectID</th>
                        <th>ProjectTitle</th>
                        <th>BiddingPackage</th>
                        <th>ConstructionName</th>
                        <th>Abstract</th>
                        <th>ProjectContent</th>
                        <th>ProjectImage</th>
                        <th>Investors</th>
                        <th>PricePackage</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projects as $proj)
                    <tr class="odd gradeX" align="center">
                        <td>{{$proj->ProjectID}}</td>
                        <td>{{$proj->ProjectTitle}}</td>
                        <td>{{$proj->BiddingPackage}}</td>
                        <td>{{$proj->ConstructionName}}</td>
                        <td>{{$proj->Abstract}}</td>
                        <td>{!!$proj->ProjectContent!!}</td>
                        <td>
                            <img src="{{ asset($proj->ProjectImage) }}" width="150">
                        </td>
                        <td>{{$proj->Investors}}</td>
                        <td>{{$proj->PricePackage}}</td>
                        <td class="center">
                            <form action="{{ route('project.destroy',$proj->ProjectID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('project.edit',$proj->ProjectID) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>    
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection