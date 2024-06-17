<div class="automation ml-2">
    <div class="automaiton_content " style="border: 2px solid rgb(156, 156, 156)">
        <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
            <h5 class="m-0">Thiết bị Công nghệ thông tin</h5>
        </div>
        <div class="card w-100 h-100" style="display: flow-root">
            @foreach ($products as $prod)
                <div class="content-card m-2" style="float: left;border: 1px solid rgb(156, 156, 156);width: 150px; height: 200px;">
                    <div class="automaiton_content-card card-automation d-flex flex-column w-100 h-100" >
                        <div class="card-automation-img" style="width: 100%; height: 150px;">
                            <img class="w-100 h-100" src="{{asset($prod->ProductImage)}}" alt="">
                        </div>
                        <div class="card-automation-body w-100 pl-2 mb-1">
                                <a href="{{ route('product_info',$prod->ProductID)}}">
                                    <h6 class="text-center m-0 mt-1" style="font-family: arial, Helvetica, sans-serif; font-size: 15px;">{{ $prod->ProductName}}</h6>
                                </a>
                                <p class="text-center m-0">{{$prod->Abstract}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>