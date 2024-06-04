<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.menu-area{background: #fff}
.dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
.mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link{color:#000;font-size:16px;text-transform:capitalize;padding:16px 0;font-family:'Roboto',sans-serif;display: block !important;}
.mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover{color: #000;background: #fff;outline: 0;}
/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a{background: #fff;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #fff;}
.mainmenu .collapse ul ul ul > li:hover > a{background: #fff;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#fff;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#fff}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#fff}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 766px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 480px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 320px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 767px) {
.navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 35px}
.navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:16px 15px 16px 45px}
}
</style>
<div class=" top-bar" style="background-color: #1E73BE">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="#" class=""><span class="text-light mr-2   icon-envelope-open-o"></span> <span class="text-light d-none d-md-inline-block">sale@3c.com.vn</span></a>
        <span class="text-light mx-md-2 d-inline-block"></span>
        <a href="#" class=""><span class="text-light mr-2   icon-phone"></span> <span class="text-light d-none d-md-inline-block">84+ 243 843 3316</span></a>

        <div class="float-right">
          <a href="#" class=""><span class="text-light mr-2   icon-youtube"></span> <span class="text-light d-none d-md-inline-block">Youtube</span></a>
          <span class="text-light mx-md-2 d-inline-block"></span>
          <a href="#" class=""><span class="text-light mr-2   icon-facebook"></span> <span class="text-light d-none d-md-inline-block">Facebook</span></a>
        </div>

      </div>

    </div>

  </div>
</div>
<header class="site-navbar shadow p-0 bg-white rounded js-sticky-header site-navbar-target" role="banner">
    <div class="container p-0">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
              <a class="navbar-brand mr-5"  href="{{ route('home')}}"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class=""><a class="text-dark font-weight-bold mr-4 " href="{{ route('home')}}">Trang Chủ </a></li>
                        <li><a class="text-dark font-weight-bold mr-4" href="{{ route('service')}}">Dịch Vụ</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle text-dark font-weight-bold mr-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lĩnh Vực</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li class="dropdown">
                                @foreach ($fields as $field)
                                  <li class="has-children">
                                    <a class="dropdown-toggle text-dark mr-4 " href="{{ route('field', $field->FieldID) }}" id="navbarDropdown" >{{ $field->FieldName }}</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($field->categories as $cat)
                                         <li><a class="text-dark" href="{{ route('category', $cat->CategoryID) }}">{{ $cat->CategoryName }}</a></li>
                                        @endforeach
                                      </ul>
                                  </li>
                                @endforeach
                                
                            </li>
                            
                            </ul>
                        </li>
                        <li><a href="#" class="nav-link pl-0 text-dark font-weight-bold mr-4">Giải Pháp</a></li>
                        <li><a href="#" class="nav-link pl-0 text-dark font-weight-bold mr-4">Dự Án</a></li>
                        <li><a href="{{ route('contact')}}" class="nav-link pl-0 text-dark font-weight-bold mr-4">Liên Hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
<<<<<<< Updated upstream
    </div>
</header>
=======
      </div>

      <header class="site-navbar shadow p-3 bg-white rounded js-sticky-header site-navbar-target" role="banner">
        <div class="container-fluid">
          <div class="row align-items-center position-relative col-lg-12 col-md-12 col-sm-12" style="display:flex; flex-wrap:nowrap;justify-content: space-between;">
            <a class="navbar-brand" style="display: contents" href="{{ route('home')}}"><img src="img/logo.png" alt=""></a>
            <div>
              <button class="navbar-toggler d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="icon-menu h3"></span>
              </button>
                <nav class="site-navigation col-12 text-right ml-auto"  role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block" id="navbarSupportedContent">
                    <li><a href="{{ route('home')}}" class="nav-link mr-4">Trang Chủ</a></li>
                    <li><a href="{{ route('service')}}" class="nav-link mr-4">Dịch Vụ</a></li>
                    <li class="has-children">
                      <a href="" class="nav-link mr-4">Lĩnh Vực</a>
                      <ul class="dropdown arrow-top">
                          @foreach ($fields as $field)
                          <li class="has-children">
                              <a href="{{ route('field', $field->FieldID) }}">{{ $field->FieldName }}</a>
                              <ul class="dropdown">
                                  @foreach ($field->categories as $cat)
                                      <li><a class="dropdown-item" href="{{ route('category', $cat->CategoryID) }}">{{ $cat->CategoryName }}</a></li>
                                  @endforeach
                              </ul>
                          </li>
                          @endforeach
                        </ul>
                    </li>
                    <li><a href="" class="nav-link mr-4">Giải Pháp</a></li>
                    <li><a href="" class="nav-link mr-4">Dự Án</a></li>
                    <li><a href="{{ route('contact')}}" class="nav-link mr-4">Liên Hệ</a></li>
                  </ul>
                </nav>
            </div>
            
            {{-- <div class="toggle-button d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div> --}}

            
          </div>
        </div>
      </header>


    <script src="{{ asset('js/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/js/main.js') }}"></script>
  </body>
</html>
>>>>>>> Stashed changes
