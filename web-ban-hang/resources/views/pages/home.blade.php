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
      <img src="https://giupban.com.vn/wp-content/uploads/31.jpg" class="d-block w-100" alt="...">
      <div class="slider_caption" style="position: absolute;" id="slider_caption-1">
        <h2>TẦM NHÌN</h2>
        <p>3C phát triển nhanh, hiệu quả nhưng an toàn và bền vững, hướng đến mục tiêu tiếp tục trở thành một trong những Công ty hàng đầu Việt Nam trong lĩnh vực kinh doanh CNTT, Viễn thông, thiết bị thí nghiệm, duy trì vị thế số 1 về cung cấp Thiết bị điện 500KV.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="numbertext">2 / 3</div>
      <img src="https://hanoispiritofplace.com/wp-content/uploads/2018/04/hinh-nen-may-tinh-69.jpg" class="d-block w-100" alt="...">
      <div class="slider_caption" style="position: absolute;" id="slider_caption-2">
        <h2>SỨ MỆNH</h2>
        <p>3C không ngừng phát triển nhằm tối ưu hóa nhu cầu của khách hàng bằng các sản phẩm, dịch vụ tốt nhất với chính sách chăm sóc khách hàng chuyên nghiệp; cam kết mang lại giá trị, sự thịnh vượng cho nhân viên; đồng thời đóng góp vào sự phát triển chung của xã hội, cộng đồng.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="numbertext">3 / 3</div>
      <img src="https://msmobile.com.vn/upload_images/images/2019/07/30/Tai-Hinh-Nen-Dep-Cho-Laptop-Win-10-3.jpg" class="d-block w-100" alt="...">
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
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="aboutus_area wow fadeInLeft">
          <h2 class="titile">Giới Thiệu</h2>
          <p>Công ty 3C được thành lập vào ngày 09/10/1989, 3C hoạt động trong lĩnh vực CNTT và Viễn thông đầu tiên tại Việt Nam, đã có đóng góp rất nhiều cho nền tin học non trẻ của Việt Nam vào những năm 90 của thế kỷ trước.</p>
          <p>Với 35 năm xây dựng và phát triển, 3C đã khẳng định được vị thế của mình trên thị trường cung cấp các sản phẩm, dịch vụ đã tham gia. Hiện nay, 3C đã trở thành một trong những nhà cung cấp hàng đầu các sản phẩm, dịch vụ công nghệ cao cho ngành Điện cao thế và Công nghệ thông tin.</p>
          <p>Kể từ khi thành lập, Công ty 3C đã tập hợp được một đội ngũ cán bộ có trình độ cao trong lĩnh vực quản lý, kinh tế và khoa học kỹ thuật, hầu hết đội ngũ này là được đào tạo tại nước ngoài hoặc các trường có chất lượng cao tại Việt Nam. Kể từ đó đến nay, nguồn nhân lực của 3C được phát triển và kế thừa theo hướng tập trung vào chất lượng để đáp ứng được các công việc đòi hỏi trình độ chuyên môn và công nghệ cao của từng giai đoạn khác nhau của công ty. Với đội ngũ cán bộ có chất lượng, 3C INC cam kết luôn đáp ứng và làm hài lòng tất cả các khách hàng sử dụng các sản phảm và dịch vụ của 3C INC cung cấp.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="newsfeed_area wow fadeInRight mt-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WahcpSLT_TY?si=QrNk33PXMOQs1c8P&autoplay=1&mute=1&start=0"
             title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
