<div class="automation ml-2">

    <div class="automaiton_content" style="border: 2px solid rgb(156, 156, 156)">
        <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
            <h5 class="m-0">Thiết bị tự động hóa</h5>
        </div>
        @foreach ($devices as $dev)
            @if ($dev->hienThiTuDongHoa == 1)
                <div class="automaiton_content-card card-automation d-flex p-2">
                    <a href="{{ route('device',$dev->DeviceID)}}" class="card-automation-img" style="width: 180px; height: 150px;">
                        <img class="w-100 h-100" src="{{asset($dev->DeviceImage)}}" alt="">
                    </a>
                    <div class="card-automation-body w-100 pl-2">
                        <div class="card-title">
                            <a href="{{ route('device',$dev->DeviceID)}}">
                                <h5>{{$dev->DeviceTitle}}</h5>
                            </a>
                            <p>{{$dev->DeviceContent}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="automation_footer d-flex mt-3 badge-primary" style="border: 2px solid rgb(128, 128, 130)">
        <div class="automation_footer-solution w-50">
            <h5 class="p-2 m-0">Tin Tức</h5>
            <div class="dropdown-divider mt-0"></div>
            @foreach ($news as $n)
            <div class="solution-card d-flex pl-2 mb-2">
                <div class="solution-img">
                    <img style="width:120px; height:120px" src="{{asset($n->NewsImage)}}" alt="">
                </div>
                <div class="solution-body pl-2">
                    <h6>{{$n->NewsTitle}}</h6>
                    <p class="overflow-hidden">{{$n->Abstract}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="automation_footer-project w-50 ml-4">
            <h5 class="p-2 m-0">Dự Án</h5>
            <div class="dropdown-divider mt-0"></div>
            @foreach ($project as $proj)
            <div class="project-card d-flex pl-2">
                <div class="project-img">
                    <img style="width:120px; height:120px" src="{{asset($proj->ProjectImage)}}" alt="">
                </div>
                <div class="project-body pl-2">
                    <h6>{{$proj->ProjectTitle}}</h6>
                    <p>{{$proj->Abstract}}</p>
                </div>
            </div>
            @endforeach
            <div class="project_related-title mt-5 ml-2">
            @foreach ($projects as $proj)
                <li class="m-0 pt-1">{{$proj->ProjectTitle}}</li>
            @endforeach
            </div>
        </div>
    </div>
</div>