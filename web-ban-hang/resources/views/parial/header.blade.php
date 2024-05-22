
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-2" href="{{ route('home')}}"><img src="img/logo.png" style="width:40px;height:40px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-2">
                <a class="nav-link text-dark h5 m-0" href="{{ route('home')}}">Trang Chủ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark h5 m-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sản Phẩm
              </a>
              <div class="dropdown-menu mt-auto" style="margin-left: -155px;background-color:aliceblue; width: 300px; height:150px" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Thiết Bị Tự Động Hóa</a>
                <a class="dropdown-item" href="#">Thiết Bị Công Nghệ Thông Tin</a>
                <a class="dropdown-item" href="#">Thiết Bị Viễn THông Xây Lắp</a>
                <a class="dropdown-item" href="#">Thiết Bị Thí Nghiệm Đo Lường</a>
              </div>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link text-dark h5 m-0" href="#">Giải Pháp</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link text-dark h5 m-0" href="#">Dịch Vụ</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link text-dark h5 m-0" href="#">Dự Án</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link text-dark h5 m-0" href="{{ route('contact')}}">Liên Hệ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-5">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
