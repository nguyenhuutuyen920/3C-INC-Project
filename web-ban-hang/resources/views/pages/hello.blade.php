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
    <section id="field" style="background: #f1f1f1">
        <div class="col-lg-12 col-md-12 col-sm-12 pt-5">
            <div class="container menu-field d-flex p-0">
                <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0" style="height:max-content">
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
                <div class="supplier-content col-lg-9 col-md-12 col-sm-12 p-0">
                    <div class="automation ml-2">
                        <div class="automation-banner w-100 mb-2" style="height: 300px">
                            <img class="w-100 h-100" src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <div class="automaiton_content" style="border: 2px solid rgb(156, 156, 156)">
                            <div class="automation_content-title p-1" style="background: rgb(104, 187, 239)">
                                <h5 class="m-0">Thiết bị tự động hóa</h5>
                            </div>
                            <div class="automaiton_content-card card-automation d-flex p-2">
                                <div class="card-automation-img" style="width: 180px; height: 150px;">
                                    <img class="w-100 h-100" src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/444762145_7612327958821848_2868938011894177004_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QegLrfM_VGIQ7kNvgGRj-3I&_nc_ht=scontent.fhan19-1.fna&oh=00_AYAo_KrCxEJBzVbCkgWooDpVtKyRInxYPx_448ukl_JI4A&oe=66659C68" alt="">
                                </div>
                                <div class="card-automation-body w-100 pl-2">
                                    <div class="card-title">
                                        <a href="">
                                            <h5>hello</h5>
                                        </a>
                                    </div>
                                    <p>abstract</p>
                                </div>
                            </div>
                            <div class="automaiton_content-card card-automation d-flex p-2">
                                <div class="card-automation-img" style="width: 180px; height: 150px;">
                                    <img class="w-100 h-100" src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/444762145_7612327958821848_2868938011894177004_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QegLrfM_VGIQ7kNvgGRj-3I&_nc_ht=scontent.fhan19-1.fna&oh=00_AYAo_KrCxEJBzVbCkgWooDpVtKyRInxYPx_448ukl_JI4A&oe=66659C68" alt="">
                                </div>
                                <div class="card-automation-body w-100 pl-2">
                                    <div class="card-title">
                                        <a href="">
                                            <h5>hello</h5>
                                        </a>
                                    </div>
                                    <p>abstract</p>
                                </div>
                            </div>
                        </div>
                        <div class="automation_footer d-flex mt-3 badge-primary" style="border: 2px solid rgb(128, 128, 130)">
                            <div class="automation_footer-solution w-50">
                                <h5 class="p-2 m-0">Giải Pháp</h5>
                                <div class="dropdown-divider mt-0"></div>
                                <div class="solution-card d-flex pl-2">
                                    <div class="solution-img">
                                        <img style="width:100px; height:100px" src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/444762145_7612327958821848_2868938011894177004_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QegLrfM_VGIQ7kNvgGRj-3I&_nc_ht=scontent.fhan19-1.fna&oh=00_AYAo_KrCxEJBzVbCkgWooDpVtKyRInxYPx_448ukl_JI4A&oe=66659C68" alt="">
                                    </div>
                                    <div class="solution-body pl-2">
                                        <h6>đây là phần giải pháp</h6>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="automation_footer-project w-50 ml-4">
                                <h5 class="p-2 m-0">Dự Án</h5>
                                <div class="dropdown-divider mt-0"></div>
                                <div class="project-card d-flex pl-2">
                                    <div class="project-img">
                                        <img style="width:100px; height:100px" src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/444762145_7612327958821848_2868938011894177004_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QegLrfM_VGIQ7kNvgGRj-3I&_nc_ht=scontent.fhan19-1.fna&oh=00_AYAo_KrCxEJBzVbCkgWooDpVtKyRInxYPx_448ukl_JI4A&oe=66659C68" alt="">
                                    </div>
                                    <div class="project-body pl-2">
                                        <h6>đây là phần dự án</h6>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                e.preventDefault();
                var categoryId = $(this).data('category-id');
                $('#category-' + categoryId).toggle();
            });
        });
    </script>
</section>
<!--=========== END COURSE BANNER SECTION ================-->
@endsection