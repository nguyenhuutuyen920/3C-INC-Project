@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                  <!-- start single blog archive -->
                  <div class="col-lg-12 col-12 col-sm-12">
                    <div class="single_blog_archive wow fadeInUp">
                      <div class="blogimg_container">
                        <a href="{{ route('news',$news->NewsID)}}" class="blog_img spe">
                          <img alt="img" src="{{ $news->NewsImage}}">
                        </a>
                      </div>
                      <h2 class="blog_title"><a href="{{ route('news', $news->NewsID)}}"> {{$news->NewsTitle}}</a></h2>
                      <p class="blog_summary">{{$news->Abstract}}</p>
                    </div>
                  </div>
              </div>
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
                      <div class="media-left">
                        <a href="news/{{$n->id}}" class="news_img">
                          <img alt="img" src="upload/news/{{$n->img}}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="news/{{$n->id}}">{{$n->title}}</a>
                       <span class="feed_date">{{$n->created_at}}</span>
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