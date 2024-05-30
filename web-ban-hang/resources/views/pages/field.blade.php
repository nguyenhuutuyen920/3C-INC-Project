@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="field"  style="background: #fff">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f2f2">
        <div class="container-fluid menu-field  d-flex p-0" >
          <div class="sidebar_menu-new col-lg-2 col-md-12 col-sm-12 p-0" style="height:max-content">
            <div class="field">
              <div class="menu-field">
                  <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                      <h6 class="text-light">LĨNH VỰC</h6>
                  </div>
                  <ul class="field-menu p-2 m-0">
                      @foreach ($fields as $f)
                          <li class="list-unstyled">
                              <a href="{{ route('field', $f->FieldID) }}">
                                  <p class="text-secondary">{{ $f->FieldName }}</p>
                              </a>
                              <div class="dropdown-divider"></div>
                          </li>
                      @endforeach
                  </ul>
              </div>
              <div class="product_menu-field">
                  <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                      <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                  </div>
                  <ul class="field-menu p-2 m-0">
                          @foreach ($field->categories as $cat)
                              <li class="has-children arrow-top list-unstyled">
                                  <a href="{{ route('category', $cat->CategoryID) }}">
                                      <p class="text-secondary">{{ $cat->CategoryName }}</p>
                                  </a>
                                  <ul class="dropdown ">
                                          @foreach ($cat->products as $prod)
                                              <li class="list-unstyled">
                                                <a class="dropdown-item" href="{{ route('product', $prod->ProductID) }}">{{ $prod->ProductName }}</a>
                                              </li>
                                          @endforeach
                                  </ul>
                                  <div class="dropdown-divider"></div>
                              </li>
                          @endforeach
                          
                  </ul>
              </div>
          </div>
          
          
            
          </div>
          <div class="product-content col-lg-10 col-md-12 col-sm-12 p-0" >
            <ul class="content_menu-field  m-0  " >
              {{-- @foreach($news as $n) --}}
              <div class="card" style="width: 215px; height:300px; float: left; margin: 0px 15px 15px 0px;">
                {{-- @foreach ($collection as $item)
                <img class="card-img-top w-100" src="" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1" style="font-size: 12px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
                @endforeach --}}
              </div>
              
              

            
              
              
                  {{-- @endforeach --}}
            </ul>
            
          </div>
          
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection