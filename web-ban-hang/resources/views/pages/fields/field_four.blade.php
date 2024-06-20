<div class="automation ml-2">
    <div class="automaiton_content" style="border: 2px solid rgb(156, 156, 156)">
        <div class="automation_content-title badge-primary p-2">
            <h5 class="m-0 font-weight-bold">Thiết bị thí nghiệm đo lường</h5>
        </div>
        <div class="automaiton_content-card card-automation d-flex p-2">
            <div class="card-automation-img">
                <img class="w-100 " src="../img/3c123.jpg" alt="">
            </div>
            <div class="card-automation-body w-100 pl-2">
                <div class="card-title">
                        <h5>Đo lường và thử nghiệm trong cơ sở hạ tầng kỹ thuật của tiêu chuẩn và sự phù hợp</h5>
                </div>
                <span>3C luôn đảm bảo tính khách quan và tin cậy trong đánh giá sự phù hợp, các phép đo, phép thử phải đưa ra các kết quả chính xác, phản ánh đúng thực trạng của các thông số hay chỉ tiêu cần được xác định của sản phẩm, hàng hoá. Với mục tiêu này, các phòng đo lường và thử nghiệm  đáp ứng các yêu cầu sau:</span></br>
                <span>- Có đủ trang thiết bị đo lường và thử nghiệm cần thiết;</span></br>
                <span>- Có cán bộ kỹ thuật được đào tạo về chuyên môn và có kỹ năng thực hiện đúng các phép đo, phép thử theo quy định;</span></br>
                <span>- Các điều kiện về môi trường đo lường và thử nghiệm thoả mãn yêu cầu;</span></br>
                <span>- Duy trì thường xuyên các tính năng và độ chính xác của các thiết bị đo lường và thử nghiệm thông qua việc hiệu chuẩn hay so sánh với các mẫu chuẩn.</span></br>
                <span>- Đánh giá sự phù hợp: Hoạt động đánh giá sự phù hợp được thực hiện thường xuyên trong quá trình sản xuất sản phẩm  cũng như ...</span></br>
            </div>
        </div>
    </div>
    <div class="automation_footer d-flex mt-3 " >
        <div class="automation_footer-solution w-50">
            <div class="automation_content-title badge-primary p-2">
                <h5 class="m-0 font-weight-bold">Tin Tức</h5>
            </div>
            <div class="dropdown-divider mt-0"></div>
            @foreach ($news as $n)
            <div class="solution-card d-flex pl-2 mb-2">
                <a class="solution-img" href="{{ route('new_content',$n->NewsID)}}">
                    <img style="width:120px; height:120px" src="{{asset($n->NewsImage)}}" alt="">
                </a>
                <div class="solution-body pl-2">
                    <a href="{{ route('new_content',$n->NewsID)}}">
                        <h6 class="text-dark">{{$n->NewsTitle}}</h6>
                    </a>
                    <p class="overflow-hidden">{{$n->Abstract}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="automation_footer-project w-50 ml-1">
            <div class="automation_content-title badge-primary p-2">
                <h5 class="m-0 font-weight-bold">Dự Án</h5>
            </div>
            <div class="dropdown-divider mt-0"></div>
            @foreach ($project as $proj)
            <div class="project-card d-flex pl-2 pb-2">
                <a class="project-img" href="{{ route('project_info',$proj->ProjectID)}}">
                    <img style="width:120px; height:120px" src="{{asset($proj->ProjectImage)}}" alt="">
                </a>
                <div class="project-body pl-2">
                    <a href="{{ route('project_info',$proj->ProjectID)}}">
                        <h6 class="text-dark">{{$proj->ProjectTitle}}</h6>
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