<style>
  
    .sidebar li .submenu{ 
        list-style: none; 
        margin: 0; 
        padding: 0; 
        padding-left: 1rem; 
        padding-right: 1rem;
    }
    </style>
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
                                  <li class="nav-item has-submenu list-unstyled">
                                      <a class="nav-link text-secondary p-0" href="{{ route('category', $cat->CategoryID) }}">
                                          {{ $cat->CategoryName }}
                                      </a>
                                      <ul class="submenu collapse pl-1">
                                              @foreach ($cat->products as $prod)
                                                  <li class="list-unstyled">
                                                    <a class="nav-link pl-2 pt-2 pb-0 pr-0 text-secondary" href="{{ route('product', $prod->ProductID) }}">{{ $prod->ProductName }}</a>
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
                <ul class="content_menu-field  m-0  w-100 h-100" >  
                  <div class="card" style="width: 200px;margin: 0px 15px 15px 0px;">
                    @foreach ($products as $prod)
                    <div class="div-img " style="width: 100%">
                      <img class="w-100" src="{{ asset($prod->ProductImage) }}" alt="Card image cap">
                    </div>
                    <div class="card-body p-2">
                      <h5 class="card-title mb-1">{{$prod->ProductName}}</h5>
                      <p class="card-text mb-1" style="font-size: 12px">{{$prod->Abstract}}</p>
                      <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                    </div>
                    @endforeach
                  </div>
                </ul>
                
              </div>
              
            </div>
          </div> 
        </section>
        <script>
          
    document.addEventListener("DOMContentLoaded", function(){
      document.querySelectorAll('.product_menu-field .nav-link').forEach(function(element){
        
        element.addEventListener('click', function (e) {
    
          let nextEl = element.nextElementSibling;
          let parentEl  = element.parentElement;	
    
            if(nextEl) {
                e.preventDefault();	
                let mycollapse = new bootstrap.Collapse(nextEl);
                
                if(nextEl.classList.contains('show')){
                  mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                      new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        }); // addEventListener
      }) // forEach
    }); 
        </script>
        <!--=========== END COURSE BANNER SECTION ================-->
    @endsection