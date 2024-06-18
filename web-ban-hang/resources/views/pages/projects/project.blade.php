@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #fff">
      <a class="text-dark" style="margin-left: 145px" href="{{ route('home')}}">Trang Chủ</a><span class="feed_date"> / </span><a class="text-dark font-weight-bold" href="{{route('project')}}"> Dự Án</a><span class="feed_date"> / </span>

        <div class="container menu-new  d-flex p-0" >
          <div class="d-flex flex-column col-lg-9 col-md-12 col-sm-12">
            <ul class="content_menu-new  m-0 p-2" style="width: 100%">
              @foreach($projects as $proj)
                <li class="new-menu p-0 ml-4 list-unstyled mt-4 pb-1" >
                  <div class="media media-new d-flex w-100 h-100" style="margin-bottom: 10px">
                    {{-- <div class="new" style="width:500px;height: 230px;"> --}}
                      <a class="new_img " href="{{ route('project_info',$proj->ProjectID)}}">
                        <img class="media-object" style="width: 220px; height:180px;" src="{{ asset($proj->ProjectImage) }}">
                      </a>
                    {{-- </div> --}}
                    <div class="new-body pl-3 w-100">
                      <a class="new_title" href="{{ route('project_info',$proj->ProjectID)}}">
                        <h5 class="font-weight-bold mb-5 text-dark" style="font-size: 1.69231em; ">{{$proj->ProjectTitle}}</h5>
                      </a>
                      <p class="new_abstract text-dark">{{$proj->Abstract}}</p>
                      <p class="new_date text-dark text-right">{{$proj->create_at}}</p>
                    </div>
                  </div>                    
                </li>
                <div class="dropdown-divider"></div>
              @endforeach
            </ul>
            <div class="paginate-new" style="display: flex; justify-content: center; flex-direction: row-reverse;">
              {{ $projects->links('pagination::bootstrap-4') }}
            </div>
          </div>
          
          <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content; ">
            <div class="field">
              <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                <h5 class="text-light">LĨNH VỰC</h5>
              </div>
              <ul class="field-menu m-0">
                @foreach ($fields as $field)
                  <li class="pt-2">
                    <a href="{{ $field->FieldID}}"><span class=" pl-3 text-dark">{{$field->FieldName}}</span></a>
                    <div class="dropdown-divider"></div>
                  </li>
                @endforeach
              </ul>
            </div>

          </div>
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection