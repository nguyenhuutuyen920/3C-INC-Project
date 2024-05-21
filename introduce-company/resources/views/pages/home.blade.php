@extends('layouts.index')
@section('content')

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
          <div class="slider_area col-lg-12 col-md-12 col-sm-12">
            <!-- Start super slider -->
            <div id="slide">
              <!-- Thẻ Chứa Slideshow -->
              <div class="slideshow-container" id="slides" style="width:100%;height: 100%;">
                  <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                  <div class="mySlides  fade" style="position: relative">
                      <div class="numbertext">1 / 3</div>
                      <img class="image"  src="img/slider/cover_web3c.jpg" style="width:100%;">
                      <div class="slider_caption" style="position: absolute;" id="slider_caption-1">
                          <h2>TẦM NHÌN</h2>
                          <p>Với những thay đổi mang tính chiến lược, tầm nhìn 2020-2030 của 3C INC được thể hiện rõ nét trong thông điệp “Kết nối giá trị, khơi dậy tiềm năng”.</p>
                          <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
                      </div>
                  </div>
                  <div class="mySlides  fade" style="position: relative">
                      <div class="numbertext">2 / 3</div>
                      <img class="image"  src="img/slider/cover_web3c.jpg" style="width:100%;height:100%">
                      <div class="slider_caption" style="position: absolute;" id="slider_caption-2">
                          <h2>SỨ MỆNH</h2>
                          <p>Với 3C INC, sứ mệnh của chúng tôi là đem lại những sản phẩm và dịch vụ kết nối mỗi người dân, gia đình, doanh nghiệp trong một hệ sinh thái, nơi những nhu cầu trong cuộc sống, công việc, học tập và giải trí được phát hiện, đánh thức và thỏa mãn nhằm đạt được sự  hài lòng, phát triển và hạnh phúc.</p>
                          <a class="slider_btn" href="canhan/gioi-thieu/gioi-thieu-chung/tam-nhin-va-su-menh">Chi tiết</a>
                      </div>
                  </div>
                  <div class="mySlides  fade" style="position: relative">
                      <div class="numbertext">3 / 3</div>
                      <div class="abc"></div>
                        <img class="image"  src="img/slider/cover_web3c.jpg" style="width:100%">  
                        <div class="slider_caption" style="position: absolute;;" id="slider_caption-3">
                              <h2>Cam kết khách hàng</h2>
                              <p>Mỗi khi gặp khách hàng, chúng ta sẽ:
                              Đón tiếp mỗi khách hàng với lời chào, cử chỉ, nụ cười, ánh mắt thân thiện. 
                              Cố gắng tìm hiểu và cung cấp thông tin đúng về tất cả các dịch vụ, sản phẩm của 3C INC và trả lời nhanh chóng, chính xác các câu hỏi của khách hàng;</p>
                              <a class="slider_btn" href="canhan/ho-tro-khach-hang/cham-soc-khach-hang/ket-noi-dai-lau">Chi tiết</a>
                        </div>
                  </div>
                  <!-- Nút điều khiển mũi tên-->
                  <a class="prev" onclick="plusSlides(-1)">❮</a>
                  <a class="next" onclick="plusSlides(1)">❯</a>
                  <!-- Nút tròn điều khiển slideshow-->
                  <div style="text-align:center; margin-top:-25px">
                      <span class="dot" onclick="currentSlide(1)"></span>
                      <span class="dot" onclick="currentSlide(2)"></span>
                      <span class="dot" onclick="currentSlide(3)"></span>
                  </div>
              </div>
              <br>
              <script src="js/test.js"></script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
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
              <li class="active"><a href="#news" data-toggle="tab">Tin tức</a></li>
              <li><a href="#events" data-toggle="tab">Sự kiện</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                  @foreach($news as $n)
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="news/{{$n->id}}">
                            <img class="media-object" src="upload/news/{{$n->img}}" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                        <a href="news/{{$n->id}}">{{$n->title}}</a>
                        <span class="feed_date">{{$n->updated_at}}</span>
                        </div>
                      </div>                    
                    </li>
                  @endforeach
                </ul>                
                <a class="see_all" href="news">Xem tất cả</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Về CHÚNG TÔI</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Công nghệ</h3>
                    <p>Mobifone luôn dẫn đầu trong triển khai công nghệ tại Việt Nam</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Phân tích dữ liệu</h3>
                    <p>Trung tâm nghiên cứu không ngừng phân tích nhu cầu của người dùng</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Hỗ trợ</h3>
                    <p>Mobifone luôn cố gắng phục vụ hỗ trợ khách hàng chuyên nghiệp nhất</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->

    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR COURSES SECTION ================-->
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
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourses_content">
              <div class="row">
                <div class="tab-pane fade in active col-lg-3 col-md-3 col-sm-3" id="news">                
                  <ul class="news_tab">
                    @foreach($news as $n)
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a class="news_img" href="{{ route('news',$n->NewsID)}}">
                              <img class="media-object" src="upload/news/{{$n->NewsImage}}" alt="img">
                            </a>
                          </div>
                          <div class="media-body">
                          <a href="{{ route('news',$n->NewsID)}}">{{$n->NewsTitle}}</a>
                          <span class="feed_date">{{$n->updated_at}}</span>
                          </div>
                        </div>                    
                      </li>
                    @endforeach
                  </ul>                
                  <a class="see_all" href="{{ route('news')}}">Xem tất cả</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <!-- <section id="ourTutors">
      <div class="container">
       Our courses titile
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Our Tutors</h2>
              <span></span> 
            </div>
          </div>
        </div>
        End Our courses titile
    
        Start Our courses content
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              Start Tutors nav
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/author.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/course-1.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Jame Burns</h3>
                      <span>Technology Teacher</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="singTutors_social">
                      <ul class="tutors_socnav">
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-instagram" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </li>                                             
              </ul>
            </div>
          </div>
        </div>
        End Our courses content
      </div>
    </section> -->
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
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
                    <img class="stsTesti_img" src="img/a1.jpg" alt="img">
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
                    <img class="stsTesti_img" src="img/a2.jpg" alt="img">
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
                    <img class="stsTesti_img" src="img/a3.jpg" alt="img">
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
