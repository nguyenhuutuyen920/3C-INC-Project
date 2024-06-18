<div class="automation ml-2">

    <div class="automaiton_content" style="border: 2px solid rgb(156, 156, 156)">
        <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
            <h5 class="m-0">Thiết bị viễn thông xây lắp</h5>
        </div>
        @foreach ($devices as $dev)
            @if ($dev->HienThiVienThongXayLap == 1)
                <div class="automaiton_content-card card-automation d-flex p-2">
                    <a href="{{ route('device',$dev->DeviceID)}}" class="card-automation-img" style="width: 180px; height: 150px;">
                        <img class="w-100 h-100" src="{{asset($dev->DeviceImage)}}" alt="">
                    </a>
                    <div class="card-automation-body w-100 pl-2">
                        <div class="card-title">
                            <a href="{{ route('device',$dev->DeviceID)}}">
                                <h4 class="text-dark">{{$dev->DeviceTitle}}</h4>
                            </a>
                            <p>{{$dev->DeviceContent}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="automation_footer mt-3 badge-primary" style="border: 2px solid rgb(128, 128, 130)">
        <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
            <h5 class="p-2 m-0">Dự Án</h5>
        </div>
        <div class="automation_footer-solution w-100 mt-2">
            @foreach ($project as $proj)
            <div class="project-card d-flex pl-2 pb-2">
                <a class="project-img" href="{{ route('project_info',$proj->ProjectID)}}">
                    <img style="width:120px; height:120px" src="{{asset($proj->ProjectImage)}}" alt="">
                </a>
                <div class="project-body pl-2">
                    <a href="{{ route('project_info',$proj->ProjectID)}}">
                        <h6 class="text-light">{{$proj->ProjectTitle}}</h6>
                    </a>
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