@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <div class="banner">
      <img src="upload/news/newsbanner2.jpg" alt="">
    </div>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row col-lg-2 col-md-2 col-sm-2">

        </div>
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
                @foreach($news as $n)
                  <!-- start single blog archive -->
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a href="{{ route('news',$n->NewsID)}}" class="blog_img spe">
                          <img alt="img" src="{{ $news->NewsImage}}">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="{{ route('news',$n->NewsID)}}"> {{$n->NewsTitle}}</a></h2>
                      <p class="blog_summary">{{$n->Abstract}}</p>
                    </div>
                  <!-- end single blog archive -->
                @endforeach
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Tin tức nổi bật <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                    @foreach($news as $n)
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <a href="news/{{$n->id}}">{{$n->title}}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach               
                </ul>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <!-- <div class="single_sidebar">
                <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add.jpg" alt="img"></a>
              </div> -->
              <!-- End single sidebar -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

@endsection