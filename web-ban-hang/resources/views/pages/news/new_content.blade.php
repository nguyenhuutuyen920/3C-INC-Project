@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive"  style="background: #fff">
      <div class="container pt-4 pb-5">
      <a class="text-dark" href="{{ route('home')}}">Trang Chủ</a><span> / </span><a class="text-dark" href="{{route('automation')}}"> Tin Tức</a><span> / </span> <span class="font-weight-bold">{{$new->NewsAlias}}</span>

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
                      <p><i class="fa fa-calendar float-right" style="font-size: 10px;">{{$new->create_at ? $new->create_at->format('d/m/Y') : ''}}</i></p>
                      <h2 class="blog_title font-weight-bold"> {{$new->NewsTitle}}</h2>
                      <p class="blog_img">
                         {!!$new->NewsContent !!} </p>
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
              <div class="single_sidebar" >
                <h2>Tin tức <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab pl-2">
                @foreach($news as $n)
                  @if ($n->NewsID == $new->NewsID)
                    @continue
                  @endif
                  <li class="list-unstyled">
                    <div class="media mt-2">
                      <div class="media-left">
                        <a href="{{route('new_content',$n->NewsID)}}" class="news_img" >
                          <img style="width: 100px;height:80px;" alt="img" src="{{ asset($n->NewsImage) }}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body pl-2">
                       <a style="" href="{{route('new_content',$n->NewsID)}}"><span class="font-weight-bold">{{$n->NewsTitle}}</span></a>
                      </div>
                    </div>
                  </li>
				        @endforeach                 
                </ul>
              </div>
            </div>
            <div class="field col-lg-12 col-md-12 col-sm-12 p-0"  style="border: 2px solid #d1d1d1">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu m-0 p-0 h-100">
                @foreach ($fields as $field)
                  <li class="mt-2 p-2 list-unstyled">
                    <a href="{{route('field', $field->FieldID)}}"><span class="text-dark font-weight-bold" style="font-size: 18px">{{$field->FieldName}}</span></a>
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