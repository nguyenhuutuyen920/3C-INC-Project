<div class="automation ml-2">
    <div class="automaiton_content" style="border: 2px solid rgb(156, 156, 156)">
        <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
            <h5 class="m-0">Thiết bị tự động hóa</h5>
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