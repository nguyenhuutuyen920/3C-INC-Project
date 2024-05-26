<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MOBIFONE THAI NGUYEN 2016">
    <meta name="author" content="">
    <title>Admin-3C-INC</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    
</head>

<body>

    <div id="wrapper">
        @include('admin.layout.header')
        @yield('content')
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- <script src="admin_asset/ckeditor/ckeditor.js" ></script> -->
    <script src="admin_asset/tinymce/tinymce.min.js"></script>
    <script src="admin_asset/tinymce/jquery.tinymce.min.js"></script>
    <script src="admin_asset/summernote-master/dist/summernote.js"></script>
    <link href="admin_asset/summernote-master/dist/summernote.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    // ----------multiplefile-upload---------
    $(document).ready(function() {
    var url1 = 'http://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/FullMoon2010.jpg/631px-FullMoon2010.jpg',
        url2 = 'http://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Earth_Eastern_Hemisphere.jpg/600px-Earth_Eastern_Hemisphere.jpg';
    $("#input-24").fileinput({
        initialPreview: [url1, url2],
        initialPreviewAsData: true,
        initialPreviewConfig: [
            {caption: "Moon.jpg", downloadUrl: url1, description: "<h5>The Moon</h5>The Moon is Earth's only natural satellite and the fifth largest moon in the solar system. The Moon's distance from Earth is about 240,000 miles (385,000 km).", size: 930321, width: "120px", key: 1},
            {caption: "Earth.jpg", downloadUrl: url2, description: "<h5>The Earth</h5> The Earth is the 3<sup>rd</sup> planet from the Sun and the only astronomical object known to harbor and support life. About 29.2% of Earth's surface is land and remaining 70.8% is covered with water.", size: 1218822, width: "120px", key: 2}
        ],
        deleteUrl: "/site/file-delete",
        overwriteInitial: false,
        maxFileSize: 100,
        initialCaption: "The Moon and the Earth"
    });
});
    </script>
    @yield('script')
</body>

</html>
