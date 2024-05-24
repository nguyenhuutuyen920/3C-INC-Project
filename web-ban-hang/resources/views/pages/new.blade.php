@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f6f6">
        <div class="container menu-new  d-flex p-0" >
          <ul class="content_menu-new col-lg-8 col-md-12 col-sm-12 m-0 p-2">
            {{-- @foreach($news as $n) --}}
                  <li class="new-menu p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="new">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-4">
                       <a class="new_title" href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="new_date text-dark">ngày 22-05-2024</p>
                       <p class="new_content text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="p-0 list-unstyled">
                    <div class="media media-new" style="margin-bottom: 10px">
                      <div class="media-left">
                        <a class="new_img" href="">
                          <img class="media-object" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="media-body pl-4">
                       <a href=""><h4>Tiêu đề của nội dung</h4></a>
                       <p class="feed_date text-dark">ngày 22-05-2024</p>
                       <p class="text-dark">Nội dung của tin tức này có những gì hay chỉ là những lời ngon ngọt trong đây, trong buổi party tối qua.</p></br>
                      </div>
                    </div>                    
                  </li>
                  <nav aria-label="Page navigation example " style="float: right">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="">1</a></li>
                      <li class="page-item"><a class="page-link" href="">2</a></li>
                      <li class="page-item"><a class="page-link" href="">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                {{-- @endforeach --}}
          </ul>
          <div class="sidebar_menu-new col-lg-4 col-md-12 col-sm-12 p-0" style="height:max-content; border: 1px solid blue">
            <div class="field">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu p-4 m-0">
                <li class="p-1">
                  <a href=""><h5 class="text-secondary">Thiết Bị Tự Động Hóa</h5></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><h5 class="text-secondary">Thiết Bị Công Nghệ Thông Tin</h5></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><h5 class="text-secondary">Thiết Bị Viễn THông Xây Lắp</h5></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><h5 class="text-secondary">Thiết Bị Thí Nghiệm Đo Lường</h5></a>
                  <div class="dropdown-divider"></div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection