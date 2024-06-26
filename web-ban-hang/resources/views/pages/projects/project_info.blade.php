@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive"  style="background: #fff">

      <div class="container pt-4 mb-5 pb-5">
      <a class="text-dark" href="{{ route('home')}}">Trang Chủ</a><span class="feed_date"> / </span><a class="text-dark" href="{{route('project')}}"> Dự Án</a><span class="feed_date"> / </span> <span class="font-weight-bold">{{$project->ProjectTitle}}</span>

        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container w-100">
                      <p><i class="fa fa-calendar float-right" style="font-size: 10px;">{{$project->create_at}}</i></p>
                      <h2 class="blog_title"> {{$project->ProjectTitle}}</h2>
                      <p class="blog_img"> {!!$project->ProjectContent!!} </p>
                    </div>
                    <div class="blog_commentbox">
                    </div>
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
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="courseArchive_sidebar p-0 col-lg-12 col-md-12 col-sm-12">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Dự Án <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab pl-1 mt-2">
                  @foreach($projects as $proj)
                    <li class="list-unstyled">
                      <div class="media mt-2">
                        <div class="media-left">
                          <a href="{{$proj->ProjectID}}" class="project_img" >
                            <img style="width: 100px;height:70px;" alt="img" src="{{ asset($proj->ProjectImage) }}" class="media-object">
                          </a>
                        </div>
                        <div class="media-body pl-2">
                        <a class="font-weight-bold" style="font-size: 15px" href="{{$proj->ProjectID}}">{{$proj->ProjectTitle}}</a>
                        </div>
                      </div>
                    </li>
                    <div class="dropdown-divider"></div>

                  @endforeach                 
                </ul>
              </div>
            </div>
            <div class="field col-lg-12 col-md-12 col-sm-12 p-0" style="border:3px solid #007bff">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu m-0 p-0">
                @foreach ($fields as $field)
                  <li class="pt-2 pl-2 list-unstyled">
                    <a href="{{route('field', $field->FieldID)}}"><span class="text-dark font-weight-bold">{{$field->FieldName}}</span></a>
                    <div class="dropdown-divider"></div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection