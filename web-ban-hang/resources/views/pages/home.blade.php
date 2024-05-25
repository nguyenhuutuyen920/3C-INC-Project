@extends('layouts.index')
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-12 p-0" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="numbertext">1 / 3</div>
          <img src="img/slider/anh1.jpg" class="d-block w-100" alt="...">
          <div class="slider_caption" style="position: absolute;" id="slider_caption-1">
            <h2>TẦM NHÌN</h2>
            <p>Với những thay đổi mang tính chiến lược, tầm nhìn 2020-2030 của 3C INC được thể hiện rõ nét trong thông điệp “Kết nối giá trị, khơi dậy tiềm năng”.</p>
            <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="numbertext">2 / 3</div>
          <img src="img/slider/anh1.jpg" class="d-block w-100" alt="...">
          <div class="slider_caption" style="position: absolute;" id="slider_caption-2">
            <h2>SỨ MỆNH</h2>
            <p>Với 3C INC, sứ mệnh của chúng tôi là đem lại những sản phẩm và dịch vụ kết nối mỗi người dân, gia đình, doanh nghiệp trong một hệ sinh thái, nơi những nhu cầu trong cuộc sống, công việc, học tập và giải trí được phát hiện, đánh thức và thỏa mãn nhằm đạt được sự  hài lòng, phát triển và hạnh phúc.</p>
            <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="numbertext">3 / 3</div>
          <img src="img/slider/anh1.jpg" class="d-block w-100" alt="...">
          <div class="slider_caption" style="position: absolute;;" id="slider_caption-3">
            <h2>Cam kết khách hàng</h2>
            <p>Mỗi khi gặp khách hàng, chúng ta sẽ:
            Đón tiếp mỗi khách hàng với lời chào, cử chỉ, nụ cười, ánh mắt thân thiện. 
            Cố gắng tìm hiểu và cung cấp thông tin đúng về tất cả các dịch vụ, sản phẩm của 3C INC và trả lời nhanh chóng, chính xác các câu hỏi của khách hàng;</p>
            <a class="slider_btn" href="canhan/ho-tro-khach-hang/cham-soc-khach-hang/ket-noi-dai-lau">Chi tiết</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container-fluid">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Lịch sử hình thành</h2>
            <p>Công ty Cổ phần Máy tính – Truyền thông – Điều khiển 3C (Computer – Communication – Control, 3C INC), được thành lập vào ngày 09/10/1989 tại TP. Hà Nội. 3C INC là một trong 3 công ty hoạt động trong lĩnh vực CNTT và Viễn thông đầu tiên tại Việt Nam, đã có đóng góp rất nhiều cho nền tin học non trẻ của Việt Nam vào những năm 90 của thể kỷ trước.</p>

              <p>Với trên 30 năm xây dựng và phát triển, 3C INC đã khẳng định được vị thế của mình trên thị trường cung cấp các sản phẩm, dịch vụ đã tham gia. Hiện nay, Công ty 3C đã trở thành một trong những nhà cung cấp hàng đầu các sản phẩm, dịch vụ công nghệ cao cho ngành CNTT, ngành Viễn thông, ngành Điện và các ngành công nghiệp khác tại Việt Nam.</p>
              
              <p> Kể từ khi thành lập, Công ty 3C đã tập hợp được một đội ngũ cán bộ có trình độ cao trong lĩnh vực quản lý, kinh tế và khoa học kỹ thuật, hầu hết đội ngũ này là được đào tạo tại nước ngoài hoặc các trường có chất lượng cao tại Việt Nam. 
                Kể từ đó đến nay, nguồn nhân lực của 3C được phát triển và kế thừa theo hướng tập trung vào chất lượng để đáp ứng được các công việc đòi hỏi trình độ chuyên môn và công nghệ cao của từng giai đoạn khác nhau của công ty. Với đội ngũ cán bộ có chất lượng, 3C INC cam kết luôn đáp ứng và làm hài lòng tất cả các khách hàng sử dụng các sản phảm và dịch vụ của 3C INC cung cấp. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="p-2"><a href="#news">Tin tức</a></li>        
            </ul>
            <!-- Tab panes -->
            <div class="container d-flex flex-column">
              <!-- Start news tab content -->
              <div class="tab-pane active " style="background:#fff" id="news">                
                <ul class="news_tab d-flex flex-column" style="height:300px; overflow: auto">
                @foreach($news as $n)
                  <li class="p-0">
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="{{route('news',$n->NewsID)}}">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-2">
                       <a href="{{route('news',$n->NewsID)}}">{{$n->NewsTitle}}</a>
                       <span>{{$n->Abstract}}</span></br>
                       <span class="feed_date">ngày 22-05-2024{{$n->updated_at}}</span>
                      </div>
                    </div>                    
                  </li>
                @endforeach
                
                </ul>   
              </div>
              <div>
                <a class="see_all "style="display: flex; align-items:flex-end"  href="{{ route('news')}}">Xem tất cả</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 
    
    
    <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
      <div class="container-fluid">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="title_area">
              <h2 class="title_two">DỰ ÁN TIÊU BIỂU</h2>
              <div class="container d-flex overflow-auto">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  @foreach ($projects as $proj)
                  {{-- <div class="card-project mb-4 box-shadow">
                    <div class="new " style="width: 100%; height: 165px;">
                      <a class="new_img w-100 h-100" href="">
                        <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                      </a>
                    </div>
                    <div class="card-body pl-1 pt-3">
                      <a class="card_title" href=""><h5>{{$proj->ProjectTitle}}</h5></a>
                      <p class="card_date text-dark">22-5-2024{{$proj->create_at}}</p>
                      <p class="card_abstract text-dark">{{$proj->Abstract}}</p></br>
                     </div>
                  </div> --}}
                  <div class="card bg-dark text-white w-100 h-100">
                    <img class="card-img w-100 h-100" data-toggle="tooltip" data-placement="right" data-target="#card-project" src="img/anhdep.jfif" alt="Card image">
                    <div id="card-project" class="card-img-overlay w-100 h-100 " style="margin-top: 130px">
                      <a href=""><h5 class="card-title text-light">{{$proj->ProjectTitle}}</h5></a>
                      <p class="card-text text-light" style="font-size:13px">{{$proj->Abstract}}</p>
                      <p class="card-date text-light">22-5-2024{{$proj->create_at}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  {{-- @foreach ($projects as $proj) --}}
                  <div class="card-project mb-4 box-shadow">
                    <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$proj->ProjectTitle}}</strong></h5>
                      <h6 class="card-text text-center">{{$proj->Abstract}}</h6>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
                </div>
              </div>
            </div>
          </div>
        </div>
         
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  


    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container-fluid">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="title_area">
              <h2 class="title_two">QUẢN LÝ CẤP CAO</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">              
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtLx5acvWjmOJLjt0mPE1BOOcSVdewFNawn6MT6oHF3j-OHjEB1Q64k_21j50H9FYNZwk&usqp=CAU" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Nguyễn Xuân Nghĩa</h3>                      
                      <span>Kỹ sư phần mềm</span>
                      <p>Giám đốc Trung tâm Đo lường viễn thông</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQjcpXFeuggn6eL0tvY6WB1jYwoIvawnjHH0o2uhLk78DPPe26-mS6zAKpKo2v6iAN71A&usqp=CAU" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Lê Nam Trà</h3>                      
                      <span>Quản lý</span>
                      <p>Tổng Giám đốc Mobifone</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <!-- <div class="stsTestimonial_msgbox">
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div> -->
                    <img class="stsTesti_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXfUXt4ZNTGAZLMtaZZC54vO6LzyxJ53fglNKX5duJ500b3WZ9GnHdT_Rd21Guf0FVWMM&usqp=CAU" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Phạm Nhật Vũ</h3>                      
                      <span>Quản lý</span>
                      <p>Chủ tịch Hội đồng Quản trị AVG</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->  

@endsection
