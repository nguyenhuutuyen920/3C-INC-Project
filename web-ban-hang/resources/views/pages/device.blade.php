@extends('layouts.index')
@section('content')
<style>
    p{
        color: #000;
    }
    strong{
        color: #000;
    }
</style>
<section id="automation h-100">
        <div class=" container menu-field pt-5 h-100">
            <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0 float-left" style="height:max-content">
                    <div class="field">
                        <div class="menu-field">
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
                                @endforeach
                            </ul>
                        </div>
                        <div class="supplier_menu-field">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                            </div>
                            <ul class="field-menu p-2 m-0 supplier-list">
                                <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="supplier-content col-lg-9 col-md-12 col-sm-12 pl-3 float-left" style="background-color: #ffffff">
                    <div class="product-title-contact d-flex pt-3" >
                        <div class="product-img"> 
                            <img style="width:250px;height: 250px;" src="{{asset($device->DeviceImage)}}"> 
                        </div>
                        <div class="product-body pl-3 mt-2 d-flex flex-column justify-content-between">
                            <div class="product-body-content">
                                <h4>{{$device->DeviceTitle}}</h4>
                                <p>Nội dung: {{$device->DeviceContent}}</p>
                                
                            </div>
                            <div class="product-body-contact mb-3 ml-5">
                                <a class=" pl-5 pr-5 pt-2 pb-2 badge-success" style="font-size: 22px;border-radius: 10px" href="{{ route('contact')}}">
                                    Liên Hệ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="product-content mt-3">
                        <h3>THÔNG TIN THIẾT BỊ</h3>
                        <p style="font-size: 15px;">{!!$device->Technicaldata!!}</p>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $(document).ready(function() {
            let defaultFieldId = '{{ $defaultField }}';
            let storedFieldId = localStorage.getItem('currentFieldId') || defaultFieldId;

            // Hàm để cập nhật danh mục sản phẩm
            function updatesupplierMenu(fieldId) {
                let fieldData = @json($fields);
                let selectedField = fieldData.find(field => field.FieldID == fieldId);
                if (!selectedField) {
                    console.error('Field not found for fieldId:', fieldId);
                    return;
                }

                let supplierMenuHtml = '';
                selectedField.categories.forEach(cat => {
                    let route;
                    if (fieldId == 1) {
                        route = '{{ route('automation', '') }}';
                    } else if (fieldId == 2) {
                        route = '{{ route('category', '') }}';
                    } else if (fieldId == 3) {
                        route = '{{ route('hello2', '') }}';
                    } else {
                        route = '{{ route('hello3', '') }}';
                    }

                    let hasSupplier = cat.supplier && cat.supplier.length > 0;
                    if (hasSupplier) {
                        supplierMenuHtml += `
                            <li class="nav-item has-submenu list-unstyled">
                                <a class="nav-link text-secondary p-0 category-link" data-category-id="${cat.CategoryID}" href="#">
                                    ${cat.CategoryName}
                                </a>
                                <ul class="submenu collapse pl-1" id="category-${cat.CategoryID}">
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
                    } else {
                        supplierMenuHtml += `
                            <li class="nav-item list-unstyled">
                                <a class="nav-link text-secondary p-0" href="${route}">
                                    ${cat.CategoryName}
                                </a>
                                <div class="dropdown-divider"></div>
                            </li>
                        `;
                    }
                });

                $('.supplier_menu-field .supplier-list').html(supplierMenuHtml);
            }

            $('.field-content').hide();
            $('#field-' + storedFieldId).show();
            updatesupplierMenu(storedFieldId);

            $('.field-link').click(function(e) {
                e.preventDefault();
                var fieldId = $(this).data('field-id');
                $('.field-content').hide();
                $('#field-' + fieldId).show();
                localStorage.setItem('currentFieldId', fieldId);
                updatesupplierMenu(fieldId);
            });

            $(document).on('click', '.category-link', function(e) {
                var categoryId = $(this).data('category-id');
                if (categoryId) {
                    e.preventDefault();
                    $('#category-' + categoryId).toggle();
                }
            });
        });
    </script>
</section>
@endsection
