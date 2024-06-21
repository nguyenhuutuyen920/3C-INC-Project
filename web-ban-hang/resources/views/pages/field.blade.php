@extends('layouts.index')
@section('content')

<section id="field" style="background: #f1f1f1;">
    <div class="container-fluid pt-5 pb-5">
        <div class="col-lg-12 col-md-12 col-sm-12 d-lg-flex p-0">
            <div class="sidebar_menu-new col-lg-3 col-md-12 col-sm-12 p-0">
                <div class="field">
                    <div class="menu-field" style="border: 1px solid #cfcfcf">
                        <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                            <h6 class="text-light">LĨNH VỰC</h6>
                        </div>
                        <ul class="field-menu p-2 m-0">
                            @foreach ($fields as $f)
                            <li class="list-unstyled">
                                <a href="#" class="field-link btn-group" data-field-id="{{ $f->FieldID }}">
                                    <p class="text-dark m-0">{{ $f->FieldName }}</p>
                                </a>
                                <div class="dropdown-divider"></div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="product_menu-field mt-3" style="border: 1px solid #aeaeae">
                        <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                            <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="category-content col-lg-9 col-md-12 col-sm-12 p-0">
                <ul class="field-menu p-2 m-0 category-list">
                    <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            let defaultFieldId = '{{ $defaultField }}';
            let storedFieldId = localStorage.getItem('currentFieldId') || defaultFieldId;

            // Hàm để cập nhật danh mục sản phẩm
            function updateCategoryMenu(fieldId) {
                let fieldData = @json($fields);
                let selectedField = fieldData.find(field => field.FieldID == fieldId);
                if (!selectedField) {
                    console.error('Field not found for fieldId:', fieldId);
                    return;
                }

                let categoryMenuHtml = '';
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

                    categoryMenuHtml += `
                        <div class="automation_content-card float-left ml-2" style="width: 240px; height: 240px;border: 1px solid #aeaeae">
                            <div class="card-automation d-lg-flex flex-column p-2 h-100 w-100">
                                <a href="${route}" class="card-automation-img" style="width: 100%; height: 150px;">
                                    <img class="w-100 h-100" src="{{asset('${cat.TypicalImage}')}}" alt="">
                                </a>
                                <div class="card-automation-body w-100 pl-2 pt-3">
                                    <div class="card-title">
                                        <a href="${route}">
                                            <h5 class="text-dark font-weight-bold">${cat.CategoryName}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('.category-list').html(categoryMenuHtml);
            }

            // Hiển thị field mặc định khi tải trang
            updateCategoryMenu(storedFieldId);

            // Cập nhật danh mục khi click vào field
            $('.field-link').click(function (e) {
                e.preventDefault();
                var fieldId = $(this).data('field-id');
                localStorage.setItem('currentFieldId', fieldId);
                updateCategoryMenu(fieldId);
            });
        });
    </script>
</section>

@endsection
