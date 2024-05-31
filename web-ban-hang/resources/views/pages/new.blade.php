@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f6f6">
        <div class="container menu-new  d-flex p-0" >
          <div class="d-flex flex-column col-lg-9 col-md-12 col-sm-12">
            <ul class="content_menu-new  m-0 p-2" style="width: 100%">
              @foreach($news as $n)
                    <li class="new-menu float-left p-0 ml-4 list-unstyled mb-4" style="width: 320px;height:415px">
                      <div class="media media-new d-flex flex-column" style="margin-bottom: 10px">
                        <div class="new w-100" style="height: 230px;">
                          <a class="new_img " href="{{ route('new_content',$n->NewsID)}}">
                            <img class="media-object w-100 h-100" src="{{ asset($n->NewsImage) }}" width="150">
                          </a>
                        </div>
                        <div class="new-body pl-1 pt-3 w-100">
                         <a class="new_title text-center" href="{{ route('new_content',$n->NewsID)}}"><h5>{{$n->NewsTitle}}</h5></a>
                         <span class="new_abstract text-dark ">{{$n->Abstract}}</span>
                         <p class="new_date text-dark text-right">{{$n->create_at}}</p>
                        </div>
                      </div>                    
                    </li>
                  @endforeach
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
                @foreach ($fields as $field)
                  <li class="pt-2">
                    <a href="{{ $field->FieldID}}"><span class="text-dark">{{$field->FieldName}}</span></a>
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