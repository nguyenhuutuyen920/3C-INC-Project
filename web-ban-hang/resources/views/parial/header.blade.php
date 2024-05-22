<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    {{-- <link href="css/css/bootstrap.min.js" rel="stylesheet"> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light pt-4 pb-0">
        <a class="navbar-brand" href="{{ route('home')}}"><img src="img/logo.png" alt=""></a>
        <button id="myBtn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ml-2">
                    <a class="nav-link text-dark h5 m-0" href="{{ route('home')}}">Trang Chủ</a>
                </li>
                <li class="nav-item ml-2 ">
                    <a class="nav-link dropdown-toggle text-dark h5 m-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sản Phẩm
                    </a>
                    <div class="dropdown-menu mt-auto" style="margin-left: 240px;background-color:aliceblue;width: 300px; height:180px" aria-labelledby="navbarDropdown">
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
        </div>
        <form class="form-inline pb-3">
            <input class="form-control rounded-pill mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success rounded-pill my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    {{-- <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script> --}}

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>
