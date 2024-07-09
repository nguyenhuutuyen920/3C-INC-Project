@extends('layouts.index')
@section('content')


    <section id="field" style="background: #fff;">
        <div class="container pt-3 pb-5" >
            <a class="text-dark" href="{{ route('home')}}">Trang Chủ</a><span> / </span><a class="text-dark" href="{{route('automation',$device->DeviceID)}}"> Thiết Bị</a><span> / </span><span class="font-weight-bold">{{$device->DeviceTitle}}</span>
            <div class="col-lg-12 col-md-12 col-sm-12 d-lg-flex p-0  pt-3 ">
                <div class="supplier-content " style="background-color: #ffffff">
                    <div class="product-title-contact d-lg-flex d-md-flex pt-3" >
                        <div class="product-img"> 
                            <img style="width:450px;height: 450px;" src="{{asset($device->DeviceImage)}}"> 
                        </div>
                        <div class="product-body pl-5 mt-2 d-flex flex-column justify-content-between">
                            <div class="product-body-content">
                                <h3 class="font-weight-bold">{{$device->DeviceTitle}}</h3>
                                <p class="text-dark">Nội dung: {{$device->DeviceContent}}</p>
                                
                            </div>
                            <div class="product-body-contact mb-3 ml-5">
                                <a class=" pl-3 pr-3 pt-2 pb-2 badge-success" style="font-size: 22px;border-radius: 10px" href="{{ route('contact')}}">
                                    Liên Hệ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="product-content mt-3">
                        <h3>THÔNG TIN THIẾT BỊ</h3>
                        <p class="text-dark" style="font-size: 15px;">{!!$device->Technicaldata!!}</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                let defaultFieldId = '{{ $defaultField }}';
                let storedFieldId = localStorage.getItem('currentFieldId') || defaultFieldId;
        
                // Hàm để cập nhật danh mục sản phẩm
                function updateProductMenu(fieldId) {
                    let fieldData = @json($fields);
                    let selectedField = fieldData.find(field => field.FieldID == fieldId);
                    if (!selectedField) {
                        console.error('Field not found for fieldId:', fieldId);
                        return;
                    }
        
                    let productMenuHtml = '';
                    selectedField.categories.forEach(cat => {
                        let route;
                        if (fieldId == 1) {
                            route = '{{ route('automation', '') }}';
                        }
                        else if (fieldId == 2) {
                            route = '{{ route('category', '') }}';
                        }
                        else if (fieldId == 3) {
                            route = '{{ route('vienthongxaylap', '') }}';
                        } else {
                            route = '{{ route('doluong', '') }}';
                        }
                        productMenuHtml += `
                            <li class="nav-item has-submenu list-unstyled">
                                <a class="nav-link text-secondary p-0" href="${route}">
                                    ${cat.CategoryName}
                                </a>
                                <ul class="submenu collapse pl-1">
                                    ${cat.supplier.map(prod => `
                                        <li class="list-unstyled">
                                            <a class="nav-link pl-2 pt-2 pb-0 pr-0 text-secondary" href="{{ route('supplier', '') }}/${prod.id}">
                                                ${prod.SupplierName}
                                            </a>
                                        </li>
                                    `).join('')}
                                </ul>
                                <div class="dropdown-divider"></div>
                            </li>
                        `;
                    });
        
                    $('.product_menu-field .product-list').html(productMenuHtml);
                }
        
                $('.field-content').hide();
                $('#field-' + storedFieldId).show();
                updateProductMenu(storedFieldId);
        
                $('.field-link').click(function(e){
                    e.preventDefault();
                    var fieldId = $(this).data('field-id');
                    $('.field-content').hide();
                    $('#field-' + fieldId).show();
                    localStorage.setItem('currentFieldId', fieldId);
                    updateProductMenu(fieldId);
                });
            });
        
            </script>
    </section>

    

<!--=========== END COURSE BANNER SECTION ================-->
@endsection
    