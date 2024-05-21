<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a class="navbar-brand" href="{{ route('home')}}"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ml-5">
                    <a class="nav-link" href="{{ route('home')}}">Trang Chủ</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="#">Tin Tức</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="#">Giải Pháp</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="#">Dịch Vụ</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="#">Dự Án</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" href="{{ route('contact')}}">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>
