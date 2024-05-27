@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f6f6">
        <div class="container menu-new  d-flex p-0" >
          <div class="d-flex flex-column">
            <ul class="content_menu-new col-lg-9 col-md-12 col-sm-12 m-0 p-2" style="width: 100%">
              @foreach($news as $n)
                    <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                      <div class="media media-new d-inline" style="margin-bottom: 10px">
                        <div class="new " style="width: 100%; height: 230px;">
                          <a class="new_img w-100 h-100" href="{{ route('new_content',$n->NewsID)}}">
                            <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                          </a>
                        </div>
                        <div class="new-body pl-1 pt-3">
                         <a class="new_title" href="{{ route('new_content',$n->NewsID)}}"><h5>{{$n->NewsTitle}}</h5></a>
                         <p class="new_date text-dark">22-5-2024{{$n->create_at}}</p>
                         <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                        </div>
                      </div>                    
                    </li>
                  @endforeach
                  {{-- <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li>
                  <li class="new-menu float-left col-5 p-0 ml-4 list-unstyled">
                    <div class="media media-new d-inline" style="margin-bottom: 10px">
                      <div class="new " style="width: 100%; height: 230px;">
                        <a class="new_img w-100 h-100" href="">
                          <img class="media-object w-100 h-100" src="img/anhdep.jfif" alt="img">
                        </a>
                      </div>
                      <div class="new-body pl-1 pt-3">
                       <a class="new_title" href=""><h5>{{$n->NewsTitle}}</h5></a>
                       <p class="new_date text-dark">{{$n->create_at}}</p>
                       <p class="new_abstract text-dark">{{$n->Abstract}}</p></br>
                      </div>
                    </div>                    
                  </li> --}}
            </ul>
            <div class="paginate-new" style="display: flex; justify-content: center; flex-direction: row-reverse;">
              {{ $news->links('pagination::bootstrap-4') }}
            </div>
          </div>
          
          <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content; ">
            <div class="field">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu m-0">
                <li class="p-1 pt-3">
                  <a href=""><span class="text-dark">Thiết Bị Tự Động Hóa</span></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><span class="text-dark">Thiết Bị Công Nghệ Thông Tin</span></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><span class="text-dark">Thiết Bị Viễn THông Xây Lắp</span></a>
                  <div class="dropdown-divider"></div>
                </li>
                <li class="p-1">
                  <a href=""><span class="text-dark">Thiết Bị Thí Nghiệm Đo Lường</span></a>
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