<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<!-- CSS của Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- JavaScript của Bootstrap 4, cần thêm cả jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">

    <title>Website Menu #4</title>
  </head>
  <body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <div class="top-bar" style="background-color: #1E73BE">
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
                      <a href="{{ route('field')}}" class="nav-link mr-4">Lĩnh Vực</a>
                      <ul class="dropdown arrow-top">
                        <li class="has-children">
                          <a href="{{ route('field')}}">Thiết Bị Tự Động Hóa</a>
                          <ul class="dropdown">
                            <li><a class="dropdown-item" href="#">Hệ thống giám sát trực tuyến</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị cao thế</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị thủy điện</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị trung thế</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị hạ thế</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị cho Trạm biến áp</a></li>
                            <li><a class="dropdown-item" href="#">Tủ và bảng điện</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị chống sét</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị đo và hiển thị</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="">Thiết Bị Công Nghệ Thông Tin</a>
                          <ul class="dropdown">
                            <li><a class="dropdown-item" href="#">Máy tính xách tay</a></li>
                            <li><a class="dropdown-item" href="#">Máy tính để bàn</a></li>
                            <li><a class="dropdown-item" href="#">Phần mềm</a></li>
                            <li><a class="dropdown-item" href="#">Máy chủ</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị văn phòng</a></li>
                            <li><a class="dropdown-item" href="#">Linh kiện máy tính</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị ngoại vi</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="">Thiết Bị Viễn THông Xây Lắp</a>
                          <ul class="dropdown">
                            <li><a class="dropdown-item" href="#">Cáp quang</a></li>
                            <li><a class="dropdown-item" href="#">Camera giám sát</a></li>
                            <li><a class="dropdown-item" href="#">Trạm BTS</a></li>
                            <li><a class="dropdown-item" href="#">MSAG - DSLAM</a></li>
                            <li><a class="dropdown-item" href="#">Tổng đài điện thoại</a></li>
                            <li><a class="dropdown-item" href="#">Máy Fax</a></li>
                            <li><a class="dropdown-item" href="#">STM1 - STM4 - SDH</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="">Thiết Bị Thí Nghiệm Đo Lường</a>
                          <ul class="dropdown">
                            <li><a class="dropdown-item" href="#">Cân điện tử</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị đo lường khí thải động cơ</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị thí nghiệm hạt nhân</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị thí nghiệm hóa dầu</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị thí nghiệm cao thế</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị thí nghiệm điện</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị đo lường điện</a></li>
                            <li><a class="dropdown-item" href="#">Thiết bị đo lường cơ khí</a></li>
                          </ul>
                        </li>
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
