@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f6f6">
        <div class="container menu-new  d-flex p-0" >
            <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content; ">
                <div class="field" style="border:3px solid #007bff">
                  <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                    <h5 class="text-light">LĨNH VỰC</h5>
                  </div>
                  <ul class="field-menu m-0">
                    @foreach ($fields as $field)
                      <li class="pt-2 pl-2">
                        <a href="{{ $field->FieldID}}"><span class="text-dark">{{$field->FieldName}}</span></a>
                        <div class="dropdown-divider"></div>
                      </li>
                    @endforeach
                  </ul>
                </div>
    
              </div>
            <div class="d-flex flex-column col-lg-9 col-md-12 col-sm-12">
                <ul class="content_menu-new  m-0 p-2" style="width: 100%">
                  {{-- @foreach($services as $service) --}}
                        <li class="service-menu float-left p-0 ml-4 list-unstyled mb-4 w-100 h-100">
                          <div class="media media-service" style="margin-bottom: 10px">
                                <a class="service_img " styl="width:100px;height:100px" href="{{-- route('service_content',$service->ServiceID)--}}">
                                    <img class="media-object w-100 h-100" src="img/anhdep.jpg" width="150">
                                </a>
                              <div class="service-body pl-1 pt-3">
                                <a class="service_title text-center" href="{{-- route('service_content',$service->ServiceID)--}}"><h5>ddbajcsaicbacaichsocaihoc{{--$service->ServiceTitle--}}</h5></a>
                                <span class="service_abstract text-dark ">idfhdssiuhfdsifhdodjadan{{--$service->Abstract--}}</span>
                                <p class="service_date text-dark text-right">{{--$service->create_at--}}</p>
                              </div>
                          </div>                    
                        </li>
                    {{-- @endforeach --}}
                </ul>
                {{-- <div class="paginate-new" style="display: flex; justify-content: center; flex-direction: row-reverse;">
                {{ $services->links('pagination::bootstrap-4') }}
                </div> --}}
            </div>
          
          
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection