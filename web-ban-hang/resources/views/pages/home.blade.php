@extends('layouts.index')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-12 p-0" style="padding-top:" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="numbertext">1 / 3</div>
      <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="slider_caption" style="position: absolute;" id="slider_caption-1">
        <h2>TẦM NHÌN</h2>
        <p>3C phát triển nhanh, hiệu quả nhưng an toàn và bền vững, hướng đến mục tiêu tiếp tục trở thành một trong những Công ty hàng đầu Việt Nam trong lĩnh vực kinh doanh CNTT, Viễn thông, thiết bị thí nghiệm, duy trì vị thế số 1 về cung cấp Thiết bị điện 500KV.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="numbertext">2 / 3</div>
      <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="slider_caption" style="position: absolute;" id="slider_caption-2">
        <h2>SỨ MỆNH</h2>
        <p>3C không ngừng phát triển nhằm tối ưu hóa nhu cầu của khách hàng bằng các sản phẩm, dịch vụ tốt nhất với chính sách chăm sóc khách hàng chuyên nghiệp; cam kết mang lại giá trị, sự thịnh vượng cho nhân viên; đồng thời đóng góp vào sự phát triển chung của xã hội, cộng đồng.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="numbertext">3 / 3</div>
      <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="slider_caption" style="position: absolute;" id="slider_caption-3">
        <h2>Cam kết khách hàng</h2>
        <p>Mỗi khi gặp khách hàng, chúng ta sẽ: Đón tiếp mỗi khách hàng với lời chào, cử chỉ, nụ cười, ánh mắt thân thiện. Cố gắng tìm hiểu và cung cấp thông tin đúng về tất cả các dịch vụ, sản phẩm của 3C INC và trả lời nhanh chóng, chính xác các câu hỏi của khách hàng;</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--=========== END SLIDER SECTION ================-->

<!--=========== BEGIN ABOUT US SECTION ================-->
<section id="aboutUs">
  <div class="container-fluid">
    <div class="row">
      <!-- Start about us area -->
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="aboutus_area wow fadeInLeft">
          <h2 class="titile text-center">Giới Thiệu</h2>
          <p>Công ty 3C được thành lập vào ngày 09/10/1989, 3C hoạt động trong lĩnh vực CNTT và Viễn thông đầu tiên tại Việt Nam, đã có đóng góp rất nhiều cho nền tin học non trẻ của Việt Nam vào những năm 90 của thế kỷ trước.</p>
          <p>Với 35 năm xây dựng và phát triển, 3C đã khẳng định được vị thế của mình trên thị trường cung cấp các sản phẩm, dịch vụ đã tham gia. Hiện nay, 3C đã trở thành một trong những nhà cung cấp hàng đầu các sản phẩm, dịch vụ công nghệ cao cho ngành Điện cao thế và Công nghệ thông tin.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="newsfeed_area wow fadeInRight">
          <ul class="nav nav-tabs feed_tabs" id="myTab2">
            <li class="active mr-2"><a href="#news" data-toggle="tab">Tin tức</a></li>
            <li><a href="#video" data-toggle="tab">Video</a></li>         
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Start news tab content -->
            <div class="tab-pane  active" id="news">                
              <ul class="news_tab">
              @foreach($news as $n)
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="{{route('new_content',$n->NewsID)}}">
                        <img class="media-object" src="{{asset($n->NewsImage)}}" alt="img">
                      </a>
                    </div>
                    <div class="media-body pl-3">
                     <a href="{{route('new_content',$n->NewsID)}}">{{$n->NewsTitle}}</a>
                     <span class="feed_date">{{$n->updated_at}}</span>
                    </div>
                  </div>                    
                </li>
              @endforeach
              </ul>                
              <a class="see_all" href="{{route('news')}}">Xem tất cả</a>
            </div>

            <div class="tab-pane " id="video">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WahcpSLT_TY?si=QrNk33PXMOQs1c8P&autoplay=1&mute=1&start=0&controls=0&autohide=1&showinfo=0&modestbranding=1&loop=1"
                 title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="ourCourses">
  <div class="container" style=" overflow: hidden;">
    <!-- Our courses title -->
    <div class="row h-100">
      <div class="col-lg-12 col-md-12 col-sm-12 p-0">
        <div class="title_area m-0 h-100">
          <h2 class="title_two mb-4">SẢN PHẨM THIẾT BỊ ĐIỆN</h2>
          <div class="project_menu p-0 d-flex">
            <div class="project_list d-flex">
              @foreach ($products as $prod)
              <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="project_card">
                  <a class="project_card-img" href="{{ route('product_info', $prod->ProductID) }}">
                    <img class="w-100" style="height: 180px" src="{{$prod->ProductImage}}" alt="">
                  </a>
                  <div class="Product_card-body">
                    <a href="{{ route('product_info', $prod->ProductID) }}">
                      <h5 class="mt-2 text-dark">{{ $prod->ProductName }}</h5>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const projectMenu = document.querySelector('.project_list');
      let scrollAmount = 0;
      let isPaused = false;
  
      function scrollProjects() {
        if (!isPaused) {
          scrollAmount -= 1; // Adjust scroll speed here
          if (scrollAmount <= -projectMenu.scrollWidth / 2) {
            scrollAmount = 0;
          }
          projectMenu.style.transform = `translateX(${scrollAmount}px)`;
        }
        requestAnimationFrame(scrollProjects);
      }
  
      // Clone the project cards to create an infinite scroll effect
      projectMenu.innerHTML += projectMenu.innerHTML;
  
      // Event listeners to pause/resume scrolling
      projectMenu.addEventListener('mouseover', function() {
        isPaused = true;
      });
  
      projectMenu.addEventListener('mouseout', function() {
        isPaused = false;
      });
  
      scrollProjects();
    });
  </script>
</section>




<section id="ourTechnology">
  <div class="container pt-5 mb-5" >
    <!-- Our courses title -->
    <div class="row h-100">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="title_area m-0 h-100">
          <h2 class="title_two mb-3">SẢN PHẨM CÔNG NGHỆ THÔNG TIN</h2>
          <div class="row mt-5 mb-5">
            @foreach ($products as $prod)
              <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="Technology_card shadow " style="height: 360px;">
                  <a class="Technology_card-img" href="">
                    <img class="w-100" style="height: 180px" src="{{ $prod->ProductImage }}" alt="">
                  </a>
                  <div class="Technology_card-body p-3 h-50 d-flex flex-column justify-content-between">
                    <a href="">
                      <h5 class="mt-2 text-dark text-left font-weight-bold">{{ $prod->ProductName}}</h5>
                    </a>
                    <a href="">
                      <p class="text-dark mb-0" style="font-size: 18px">Xem Thêm</p>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="ourNews">
  <div class="container pt-5 mb-5" >
    <!-- Our courses title -->
    <div class="row h-100">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="title_area m-0 h-100">
          <h2 class="title_two mb-3">TIN TỨC</h2>
          <div class="row mt-5 mb-5">
            @foreach ($news as $n)
              <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="New_card shadow " style="height: 360px;">
                  <a class="New_card-img" href="{{ route('new_content', $n->NewsID) }}">
                    <img class="w-100" style="height: 180px" src="{{ $n->NewsImage }}" alt="">
                  </a>
                  <div class="New_card-body p-3 h-50 d-flex flex-column justify-content-between">
                    <a href="">
                      <h5 class="mt-2 text-dark text-left font-weight-bold">{{ $n->NewsTitle}}</h5>
                    </a>
                    <a href="{{ route('new_content', $n->NewsID) }}">
                      <p class="text-dark mb-0" style="font-size: 18px">Xem Thêm</p>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection
