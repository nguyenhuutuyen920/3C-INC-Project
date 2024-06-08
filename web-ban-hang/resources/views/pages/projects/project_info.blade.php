@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive"  style="background: #fff">
      <div class="container pt-4">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container w-100">
                      <p><i class="fa fa-calendar float-right" style="font-size: 10px;">{{$project->created_at}}</i></p>
                      <h2 class="blog_title"> {{$project->ProjectTitle}}</h2>
                      <p class="blog_img"> {{!!$project->ProjectContent!!}} </p>
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
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="courseArchive_sidebar p-0 col-lg-12 col-md-12 col-sm-12">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Dự Án <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab pl-1">
                @foreach($projects as $proj)
                  <li class="list-unstyled">
                    <div class="media">
                      <div class="media-left">
                        <a href="{{$proj->ProjectID}}" class="project_img" >
                          <img style="width: 60px;height:60px;" alt="img" src="{{ asset($proj->ProjectImage) }}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body pl-1">
                       <a style="font-size: 17px" href="{{$proj->ProjectID}}">{{$proj->ProjectTitle}}</a>
                      </div>
                    </div>
                  </li>
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
                    <a href="{{route('field', $field->FieldID)}}"><span class="text-dark">{{$field->FieldName}}</span></a>
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