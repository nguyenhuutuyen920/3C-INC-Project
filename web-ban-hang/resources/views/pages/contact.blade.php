@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->

    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">3C INC</h2>
              <span></span> 
              <p>Số 149D phố Yên Phụ, Phường Yên Phụ, Quận Tây Hồ, TP Hà Nội, Việt nam</p>
            </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="contact_form wow fadeInLeft">
              <form action="{{ route('contact.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <input name="SenderName" type="text" class="wp-form-control wpcf7-text" placeholder="Tên của bạn">
                <input name="SenderEmail" type="mail" class="wp-form-control wpcf7-email" placeholder="Địa chỉ email">          
                <input name="ContactTitle" type="text" class="wp-form-control wpcf7-text" placeholder="Tiêu đề">
                <textarea name="ContactContent" class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Nội dung cần gửi"></textarea>
                <input type="submit"  class="wpcf7-submit .bg-success">
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="contact_address wow fadeInRight">
              <h3>Địa chỉ</h3>
              <div class="address_group">
               <p>Địa chỉ trụ sở chính : Số 149D phố Yên Phụ, Phường Yên Phụ, Quận Tây Hồ, TP Hà Nội, Việt nam - Tel: 024 37334499    - Fax : 024 37334499</p>
               <p>Giao dịch khách hàng:Số 181 Nghi Tàm, Tây Hồ, Hà Nội  - Tel: 024 37331699   - Fax: 024 38433316  </p>
               <p>Email:</p>
              </div>
              <div class="address_group">
              <ul class="footer_social">
                <li><a href="https://www.facebook.com/mobifone" target="_blank" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="icon-google-plus"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="icon-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com/user/VMSMobiFone" target="_blank" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/181+Nghi+T%C3%A0m,+Y%C3%AAn+Ph%E1%BB%A5,+T%C3%A2y+H%E1%BB%93,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0551009,105.8339807,17z/data=!3m1!4b1!4m6!3m5!1s0x3135aa533671734f:0x3b5c36f9d5fa7d28!8m2!3d21.0550959!4d105.8365556!16s%2Fg%2F11c29kwk73?hl=vi-VN&entry=ttu"></iframe>
    </section>

    <!--=========== END GOOGLE MAP SECTION ================-->
    
@endsection