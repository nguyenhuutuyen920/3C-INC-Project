<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3C.INC</title>
    <base href="{{asset('')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .menu-area { background: #fff; }
        .dropdown-menu { padding: 0; margin: 0; border: 0 solid transition !important; border: 0 solid rgba(0, 0, 0, .15); border-radius: 0; -webkit-box-shadow: none !important; box-shadow: none !important; }
        .mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a, .navbar-expand-lg .navbar-nav .nav-link { color: #000; font-size: 16px; text-transform: capitalize; padding: 16px 0; font-family: 'Roboto', sans-serif; display: block !important; }
        .mainmenu .active a, .mainmenu .active a:focus, .mainmenu .active a:hover, .mainmenu li a:hover, .mainmenu li a:focus, .navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover { color: #fff; background: #fff; outline: 0; }
        .mainmenu .collapse ul > li:hover > a { background: #fff; }
        .mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover { background: #fff; }
        .mainmenu .collapse ul ul ul > li:hover > a { background: #fff; }
        .mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu { background: #fff; }
        .mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu { background: #fff; }
        .mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu { background: #fff; }
        .mainmenu { background: none; border: 0 solid; margin: 0; padding: 0; min-height: 20px; width: 100%; }
        .mainmenu .collapse ul li:hover > ul { display: block; }
        .mainmenu .collapse ul ul { position: absolute; top: 100%; left: 0; min-width: 250px; display: none; }
        .mainmenu .collapse ul ul li { position: relative; }
        .mainmenu .collapse ul ul li:hover > ul { display: block; }
        .mainmenu .collapse ul ul ul { position: absolute; top: 0; left: 100%; min-width: 250px; display: none; }
        .mainmenu .collapse ul ul ul li { position: relative; }
        .mainmenu .collapse ul ul ul li:hover ul { display: block; }
        .mainmenu .collapse ul ul ul ul { position: absolute; top: 0; left: -100%; min-width: 250px; display: none; z-index: 1; }
        .navbar-nav .show .dropdown-menu .dropdown-menu > li > a { padding: 16px 15px 16px 35px; }
        .navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a { padding: 16px 15px 16px 45px; }
        header.site-navbar { position: sticky; top: 0; z-index: 1000; }
    </style>
</head>
<body>
    <div class="top-bar" style="background-color: #1E73BE">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class=""><span class="text-light mr-2 icon-envelope-open-o"></span> <span class="text-light d-none d-md-inline-block">sale@3c.com.vn</span></a>
                    <span class="text-light mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="text-light mr-2 icon-phone"></span> <span class="text-light d-none d-md-inline-block">84+ 243 843 3316</span></a>
                    <div class="float-right">
                        <a href="https://zalo.me/0565799835" class=""><span class="text-light mr-2"></span> <span class="text-light d-none d-md-inline-block">Zalo</span></a>
                        <span class="text-light mx-md-2 d-inline-block"></span>
                        <a href="https://www.facebook.com/3c.com.vn" class=""><span class="text-light mr-2 icon-facebook"></span> <span class="text-light d-none d-md-inline-block">Facebook</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar shadow p-0 bg-white js-sticky-header site-navbar-target" role="banner">
        <div class="container p-0">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    <a class="navbar-brand m-0 p-1" href="{{ route('home') }}"><img width="70px" height="50px" src="../img/logo_3c.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class=""><a class="text-dark font-weight-bold mr-4" href="{{ route('home') }}">TRANG CHỦ </a></li>
                            <li><a class="text-dark font-weight-bold mr-4" href="{{ route('introduce') }}">GIỚI THIỆU</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle text-dark font-weight-bold mr-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SẢN PHẨM</a>
                                <ul class="dropdown-menu pt-0 pb-2" aria-labelledby="navbarDropdown">
                                    <li class="dropdown">
                                        <li class="badge-primary" style="padding: 2px"></li>
                                        @foreach ($fields as $field)
                                            <li class="has-children">
                                                <a class="text-dark mr-4 font-weight-bold" href="{{ route('field', $field->FieldID) }}" id="Dropdown">{{ $field->FieldName }}</a>
                                            </li>
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('project') }}" class="nav-link pl-0 text-dark font-weight-bold mr-4">DỰ ÁN</a></li>
                            <li><a href="{{ route('news') }}" class="nav-link pl-0 text-dark font-weight-bold mr-4">TIN TỨC</a></li>
                            <li><a href="{{ route('contact') }}" class="nav-link pl-0 text-dark font-weight-bold mr-4">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Nội dung trang web -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
