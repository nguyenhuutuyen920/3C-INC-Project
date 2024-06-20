@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->

    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <a class="text-dark"href="{{ route('home')}}">Trang Chủ</a><span class="feed_date"> / </span><a class="text-dark font-weight-bold"> Liên Hệ</a><span class="feed_date"> / </span>

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
                <input type="submit"  class="wpcf7-submit badge-success pl-5 pr-5">
              </form>
              @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
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
@endsection