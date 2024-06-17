<!DOCTYPE html>
<html lang="en">
<head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>3C iNC</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    {{-- <base href="{{asset('')}}"> --}}
    {{-- <link rel="stylesheet" href="/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-4.6.2-dist/css/bootstrap-grid.css"> --}}
    <!-- Mobile Specific Metas
        
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery.js" rel="stylesheet"></script>
    <script src="../js/jquery-3.3.1.min.js" rel="stylesheet"></script>
    <script src="../js/jquery.sticky.js" rel="stylesheet"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" rel="stylesheet"></script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="style.css">
	@yield('css')

</head>
<body class="h-auto">    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
	@include('parial.header')
    <!--=========== END HEADER SECTION ================--> 

	@yield('content')
    
    <!--=========== BEGIN FOOTER SECTION ================-->
	@include('parial.footer')
    <!--=========== END FOOTER SECTION ================--> 

	@yield('script')

</body>
</html>