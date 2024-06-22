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
    <section id="field" style="background: #f1f1f1" class="pb-5">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-5">
            <div class="container-fluid menu-field d-lg-flex p-0">
                <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content">
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
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="supplier_menu-field mt-2" style="border: 1px solid #cfcfcf">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                            </div>
                            <ul class="field-menu p-2 m-0 supplier-list">
                                <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="supplier-content col-lg-9 col-md-12 col-sm-12 p-0">
                    @foreach ($devices as $dev)
                        @if ($dev->hienThiTuDongHoa == 1)
                            <div class="automation_content-card float-left" style="width: 240px; height: 240px;">
                                <div class="card-automation d-lg-flex flex-column pl-3 pt-3 h-100 w-100">
                                    <a href="{{ route('device',$dev->DeviceID)}}" class="card-automation-img" style="width: 100%; height: 150px;">
                                        <img class="w-100 h-100" src="{{asset($dev->DeviceImage)}}" alt="">
                                    </a>
                                    <div class="card-automation-body w-100 pl-2 pt-3">
                                        <div class="card-title">
                                            <a href="{{ route('device',$dev->DeviceID)}}">
                                                <h5 class="text-dark font-weight-bold">{{$dev->DeviceTitle}}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
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

                    let hasSupplier = cat.device && cat.device.length > 0;
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
                                <a class="nav-link text-secondary p-0 category-link" href="${route}">
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
