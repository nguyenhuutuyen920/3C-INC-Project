@extends('layouts.index')
@section('content')


    <section id="field" style="background: #fff;">
        <div class="container pt-3 pb-5" >
            <a class="text-dark" href="{{ route('home')}}">Trang Chủ</a><span> / </span><a class="text-dark" href="{{route('automation')}}"> Thiết Bị</a><span> / </span><span>{{$device->DeviceTitle}}</span>
            <div class="col-lg-12 col-md-12 col-sm-12 d-lg-flex p-0  pt-5 ">
                <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0 ">
                    <div class="field">
                        <div class="menu-field" style="border: 1px solid #cfcfcf">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">LĨNH VỰC</h6>
                            </div>
                            <ul class="field-menu p-2 m-0">
                                @foreach ($fields as $f)
                                <li class="list-unstyled">
                                    <a href="#" class="field-link" data-field-id="{{ $f->FieldID }}">
                                        <p class="text-secondary m-0">{{ $f->FieldName }}</p>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product_menu-field mt-2" style="border: 1px solid #cfcfcf">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                            </div>
                            <ul class="field-menu p-2 m-0 product-list">
                                <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="supplier-content col-lg-9 col-md-12 col-sm-12 pl-3" style="background-color: #ffffff">
                    <div class="product-title-contact d-lg-flex pt-3" >
                        <div class="product-img"> 
                            <img style="width:250px;height: 250px;" src="{{asset($device->DeviceImage)}}"> 
                        </div>
                        <div class="product-body pl-3 mt-2 d-flex flex-column justify-content-between">
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
                            route = '{{ route('hello3', '') }}';
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
    