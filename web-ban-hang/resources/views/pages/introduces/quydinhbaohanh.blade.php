@extends('layouts.index')
@section('content')

<section id="introduce">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="container pt-5">
            <a class="text-dark" href="{{ route('home')}}">Trang Chủ</a><span class="feed_date"> / </span><a class="text-dark font-weight-bold"> QUY ĐỊNH BẢO HÀNH</a><span class="feed_date"> / </span>
            <div class="introduce-img mt-4">
                <img width="100%" src="../img/tapthecongty.jpg" alt="">
            </div>
            <h4 class="mt-5 font-weight-bold">QUY ĐỊNH BẢO HÀNH</h4>
            <p class="mt-3 text-dark">Tất cả các sản phẩm bán ra của 3C.INC đều là sản phẩm nhập khẩu chính hãng với đầy đủ các giấy tờ chứng nhận nguồn gốc và chất lượng từ hãng sản xuất và được bảo hành chính hãng 1 năm</p>

        </div>
    </div>
</section>
@endsection