@extends('layouts.index')
@section('content')

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section class="automation">
    <style>
        .sidebar li .submenu {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-left: 1rem;
            padding-right: 1rem;
        }
    </style>
    <section id="field" style="background: #fff" class="pb-5">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-5">
            <div class="container-fluid menu-field d-lg-flex p-0">
                <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content">
                    <div class="field">
                        <div class="menu-field" >
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h5 class="text-light font-weight-bold">LĨNH VỰC</h5>
                            </div>
                            <ul class="field-menu p-2 m-0" style="border: 1px solid #372bec">
                                @foreach ($fields as $f)
                                <li class="list-unstyled mb-2" >
                                    <a href="#" class="field-link" data-field-id="{{ $f->FieldID }}">
                                        <p class="text-dark font-weight-bold p-2 m-0" style="font-size: 15px;text-transform: uppercase;">{{ $f->FieldName }}</p>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="supplier_menu-field mt-2" >
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h5 class="text-light font-weight-bold">DANH MỤC SẢN PHẨM</h5>
                            </div>
                            <ul class="field-menu p-2 m-0 supplier-list" style="border: 1px solid #372bec">
                                <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="supplier-content col-lg-9 col-md-12 col-sm-12 p-0">
                    <ul class="content_menu-field  m-0  w-100 h-100  pl-3" >  
                        @foreach ($products as $prod)
                            <div class="card" style="width: 240px;height:auto;margin: 0px 15px 15px 0px;border: 2px solid #e6e6e6">
                            <a class="div-img" href="{{ route('product_info',$prod->ProductID)}}" style="width: 100%">
                                <img src="{{ asset($prod->ProductImage) }}" width="100%" height="190px" >
                            </a>
                            <div class="card-body p-2">
                                <a href="{{ route('product_info',$prod->ProductID)}}">
                                <h5 class="card-title mb-1">{{$prod->ProductName}}</h5>
                                </a>
                                <p class="card-text pt-1" style="font-size: 15px">{{$prod->Abstract}}</p>
                                <a href="{{ route('contact') }}" class="card-btn btn btn-primary d-flex justify-content-center">Liên Hệ</a>
                            </div>
                            </div>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
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
                        route = `{{ route('automation', ['id' => '']) }}${cat.CategoryID}`;
                    }
                    else if (fieldId == 2) {
                        route = '{{ route('category', '') }}';
                    }
                    else if (fieldId == 3) {
                        route = `{{ route('vienthongxaylap', ['id' => '']) }}${cat.CategoryID}`;
                    } else {
                        route = `{{ route('doluong', ['id' => '']) }}${cat.CategoryID}`;
                    }
                    
                    let hasSupplier = cat.supplier && cat.supplier.length > 0;
                    if (hasSupplier) {
                        supplierMenuHtml += `
                            <li class="nav-item has-submenu list-unstyled font-weight-bold p-2 mb-2" >
                                <a class="nav-link text-dark p-0 category-link" data-category-id="${cat.CategoryID}" style="font-size: 15px; text-transform: uppercase;" href="#">
                                    ${cat.CategoryName}
                                </a>
                                <ul class="submenu collapse pl-1" id="category-${cat.CategoryID}">
                                    ${cat.supplier.map(prod => `
                                        <li class="list-unstyled" >
                                            <a class="nav-link pl-2 pt-2 pb-0 pr-0 text-dark font-weight-bold"  href="{{ route('supplier', '') }}${prod.id}" >
                                                ${prod.SupplierName}
                                            </a>
                                        </li>
                                    `).join('')}
                                </ul>
                            </li>
                        `;
                    } else {
                        supplierMenuHtml += `
                            <li class="nav-item list-unstyled p-2 mb-2" >
                                <a class="nav-link text-dark font-weight-bold p-0 category-link" style="font-size: 15px; text-transform: uppercase;" href="${route}">
                                    ${cat.CategoryName}
                                </a>
                            </li>
                        `;
                    }
                });

                $('.supplier_menu-field .supplier-list').html(supplierMenuHtml);
            }

            $('.field-content').hide();
            $('#field-' + storedFieldId).show();
            updatesupplierMenu(storedFieldId);

            $('.field-link').click(function(e){
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
<!--=========== END COURSE BANNER SECTION ================-->
@endsection
