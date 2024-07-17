@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="project">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5 pb-5"  style="background: #ffffff">
      <a class="text-dark" style="margin-left: 145px" href="{{ route('home')}}">Trang Chủ</a><span class="feed_date"> / </span><a class="text-dark font-weight-bold" href="{{route('automation')}}"> Dự Án</a><span class="feed_date"> / </span>

        <div class="container menu-project  d-lg-flex p-0 mt-3" >
          <div class="d-flex flex-column col-lg-12 col-md-12 col-sm-12">
            <ul class="content_menu-project  m-0 p-2" style="width: 100%">
              @foreach($projects as $n)
                <li class="card project-menu float-left p-2 list-unstyled mb-4 col-lg-4 col-md-5 col-sm-12" style="border: 2px solid #e0e0e0">
                  <div class="media media-project d-flex flex-column" style="margin-bottom: 10px;">
                    <div class="project w-100" style="height: 230px;">
                      <a class="project_img " href="{{ route('project_info',$n->ProjectID)}}">
                        <img class="media-object w-100 h-100" src="{{ asset($n->ProjectImage) }}" width="150">
                      </a>
                    </div>
                    <div class="project-body pl-1 pt-3 w-100">
                      <a class="project_title" href="{{ route('project_info',$n->ProjectID)}}"><h4 class="text-dark font-weight-bold">{{$n->ProjectTitle}}</h4></a>
                      <span class="project_abstract text-dark ">{{$n->Abstract}}</span>
                      <p class="project_date text-dark text-right">{{$n->create_at}}</p>
                    </div>
                  </div>                    
                </li>
              @endforeach
            </ul>
            <div class="paginate-project" style="display: flex; justify-content: center; flex-direction: row-reverse;">
              {{ $projects->links('pagination::bootstrap-4') }}
            </div>
          </div>
          
          {{-- <div class="sidebar_menu-project col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content; ">
            <div class="field">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light font-weight-bold text-center">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu m-0 badge-secondary">
                @foreach ($fields as $field)
                  <li class="pt-2">
                    <a href="{{ $field->FieldID}}"><span class="text-light pl-3 ">{{$field->FieldName}}</span></a>
                    <div class="dropdown-divider"></div>
                  </li>
                @endforeach
              </ul>
            </div>

          </div> --}}
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection