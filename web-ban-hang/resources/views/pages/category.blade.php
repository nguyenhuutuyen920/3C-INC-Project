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
                        <div class="product_menu-field">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                            </div>
                            <ul class="field-menu p-2 m-0 product-list">
                                <!-- Danh mục sản phẩm sẽ được cập nhật động -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-content col-lg-9 col-md-12 col-sm-12 p-0">
                    @foreach ($fields as $f)
                    <div id="field-{{ $f->FieldID }}" class="field-content" style="display:none;">
                        @if ($f->FieldID == 1)
                            <div class="page">
                                @include('pages.fields.field_one')
                            </div>
                        @elseif ($f->FieldID == 2)
                            <div class="page">
                                @include('pages.fields.field_two')
                            </div>
                        @elseif ($f->FieldID == 3)
                            <div class="page">
                                @include('pages.fields.field_three')
                            </div>
                        @elseif ($f->FieldID == 4)
                            <div class="page">
                                @include('pages.fields.field_four')
                            </div>
                        @endif
                    </div>
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
            function updateProductMenu(fieldId) {
                let fieldData = @json($fields);
                let selectedField = fieldData.find(field => field.FieldID == fieldId);
                if (!selectedField) {
                    console.error('Field not found for fieldId:', fieldId);
                    return;
                }

                let productMenuHtml = '';
                selectedField.categories.forEach(cat => {
                    productMenuHtml += `
                        <li class="nav-item has-submenu list-unstyled">
                            <a class="nav-link text-secondary p-0 category-link" data-category-id="${cat.CategoryID}" href="#">
                                ${cat.CategoryName}
                            </a>
                            <ul class="submenu collapse pl-1" id="category-${cat.CategoryID}">
                                ${cat.products.map(prod => `
                                    <li class="list-unstyled">
                                        <a class="nav-link pl-2 pt-2 pb-0 pr-0 text-secondary" href="{{ route('product', '') }}/${prod.ProductID}">
                                            ${prod.ProductName}
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
