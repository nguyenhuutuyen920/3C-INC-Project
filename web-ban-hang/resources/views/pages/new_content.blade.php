@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive"  style="background: #fff">
      <div class="container pt-4">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <p><i class="fa fa-calendar float-right" style="font-size: 10px;">{{$new->created_at}}</i></p>
                      <h2 class="blog_title"> {{$new->NewsTitle}}</h2><a href="" class="blog_img">
                        <img alt="img" src="images/news1.jpg">
                      <p><i class="fa fa-user"></i>{{$new->NewsMetaDescription}}</p>
                      </a>
                    </div>
                    <div class="blog_commentbox">
                    </div>
                    {{$new->NewsContent}}
                    
                  	</div>
                  <!-- single blog nex & prev button -->
                  <!-- <div class="single_blog_prevnext">
                    <a class="prev_post wow fadeInLeft" href="#"><i class="fa fa-angle-left"></i>Previous Post</a>
                    <a class="next_post wow fadeInRight" href="#">Next Post<i class="fa fa-angle-right"></i></a>
                  </div> -->
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->
              <!-- start related post -->
              
              <!-- start related post -->           
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Tin tức <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab pl-2">
                @foreach($news as $n)
                  <li class="list-unstyled">
                    <div class="media">
                      <div class="media-left">
                        <a href="{{$n->NewsID}}" class="news_img">
                          <img alt="img" src="{{$n->NewsImage}}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="{{$n->NewsID}}">{{$n->NewsTitle}}</a>
                      </div>
                    </div>
                  </li>
				        @endforeach                 
                </ul>
              </div>
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection