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
                <h1 class="page-header">Introduce
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
                        <th>IntroduceID</th>
                        <th>TabID</th>
                        <th>IntroducePageTitle</th>
                        <th>IntroduceAlias</th>
                        <th>IntroduceMetaKeyword</th>
                        <th>IntroduceMetaDescription</th>
                        <th>IntroduceImage</th>
                        <th>Title</th>
                        <th>IntroduceAbtract</th>
                        <th>IntroduceContent</th>
                        <th>ViewOrder</th>
                        <th>IsTypical</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($introds as $introd)
                    <tr class="odd gradeX" align="center">
                        <td>{{$introd->IntroduceID}}</td>
                        <td>{{$introd->TabID}}</td>
                        <td>{{$introd->IntroducePageTitle}}</td>
                        <td>{{$introd->IntroduceAlias}}</td>
                        <td>{{$introd->IntroduceMetaKeyword}}</td>
                        <td>{{$introd->IntroduceMetaDescription}}</td>
                        <td>{{$introd->IntroduceImage}}</td>
                        <td>{{$introd->Title}}</td>
                        <td>{{$introd->IntroduceAbtract}}</td>
                        <td>{{$introd->IntroduceContent}}</td>
                        <td>{{$introd->ViewOrder}}</td>
                        <td>{{$introd->IsTypical}}</td>
                        <td class="center">
                            <form action="{{ route('introduce.destroy',$introd->IntroduceID)}}" method="post">
                                @csrf @method('DELETE')
                                <i class="fa fa-trash-o fa-fw"></i><button class="btn btn-primary btn-sm"> Delete</button>
                            </form>
                        </td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i> <a href="{{ route('introduce.edit',$introd->IntroduceID) }}" class="btn btn-primary btn-sm">Edit</a>
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