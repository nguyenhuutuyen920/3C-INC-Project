@extends('layouts.index')
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-12 p-0"  data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li class="rounded-circle" style="width:5px; height:10px; padding-left: 6px;" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="numbertext">1 / 3</div>
          <img src="https://giupban.com.vn/wp-content/uploads/31.jpg" class="d-block w-100" style="height: 900px" alt="...">
          <div class="slider_caption" style="position: absolute;" id="slider_caption-1">
            <h2>TẦM NHÌN</h2>
            <p>Với những thay đổi mang tính chiến lược, tầm nhìn 2020-2030 của 3C INC được thể hiện rõ nét trong thông điệp “Kết nối giá trị, khơi dậy tiềm năng”.</p>
            <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="numbertext">2 / 3</div>
          <img src="https://hanoispiritofplace.com/wp-content/uploads/2018/04/hinh-nen-may-tinh-69.jpg" class="d-block w-100" style="height: 900px" alt="...">
          <div class="slider_caption" style="position: absolute;" id="slider_caption-2">
            <h2>SỨ MỆNH</h2>
            <p>Với 3C INC, sứ mệnh của chúng tôi là đem lại những sản phẩm và dịch vụ kết nối mỗi người dân, gia đình, doanh nghiệp trong một hệ sinh thái, nơi những nhu cầu trong cuộc sống, công việc, học tập và giải trí được phát hiện, đánh thức và thỏa mãn nhằm đạt được sự  hài lòng, phát triển và hạnh phúc.</p>
            <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="numbertext">3 / 3</div>
          <img src="https://msmobile.com.vn/upload_images/images/2019/07/30/Tai-Hinh-Nen-Dep-Cho-Laptop-Win-10-3.jpg" class="d-block w-100" style="height: 900px" alt="...">
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
                        <a class="news_img" href="{{route('new_content',$n->NewsID)}}">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-2">
                       <a href="{{route('new_content',$n->NewsID)}}">{{$n->NewsTitle}}</a>
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
    <section id="ourCourses">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">DỰ ÁN TIÊU BIỂU</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
              
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 
    
    
    <!--=========== BEGIN OUR COURSES SECTION ================-->
    
    <!--=========== END OUR COURSES SECTION ================-->  


@endsection
