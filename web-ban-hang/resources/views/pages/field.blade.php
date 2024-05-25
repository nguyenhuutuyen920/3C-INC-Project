@extends('layouts.index')
@section('content')

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="new">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-5"  style="background: #f6f2f2">
        <div class="container-fluid menu-new  d-flex p-0" >
          <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content">
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
          <div class="product-content col-lg-9 col-md-12 col-sm-12 p-0" >
            <ul class="content_menu-new  m-0 p-2 " >
              {{-- @foreach($news as $n) --}}
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/anhdep.jfif" alt="Card image cap">
                <div class="card-body p-2">
                  <h5 class="card-title mb-1">Card title</h5>
                  <p class="card-text mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                </div>
              </div>
              
              
                  {{-- @endforeach --}}
            </ul>
            
          </div>
          
        </div>
      </div> 
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
@endsection