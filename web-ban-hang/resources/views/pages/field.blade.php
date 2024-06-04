@extends('layouts.index')
@section('content')

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section class="automation">
    <style>
        .sidebar li .submenu{
            list-style: none;
            margin: 0;
            padding: 0;
            padding-left: 1rem;
            padding-right: 1rem;
        }
    </style>
    <section id="field" style="background: #fff">
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
                                        <p class="text-secondary">{{ $f->FieldName }}</p>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="product_menu-field">
                            <div class="field-title bg-primary" style="padding: 8px 10px 1px 10px">
                                <h6 class="text-light">DANH MỤC SẢN PHẨM</h6>
                            </div>
                            <ul class="field-menu p-2 m-0">
                                @foreach ($field->categories as $cat)
                                <li class="nav-item has-submenu list-unstyled">
                                    <a class="nav-link text-secondary p-0" href="{{ route('category', $cat->CategoryID) }}">
                                        {{ $cat->CategoryName }}
                                    </a>
                                    <ul class="submenu collapse pl-1">
                                        @foreach ($cat->products as $prod)
                                        <li class="list-unstyled">
                                            <a class="nav-link pl-2 pt-2 pb-0 pr-0 text-secondary" href="{{ route('product', $prod->ProductID) }}">{{ $prod->ProductName }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-content col-lg-9 col-md-12 col-sm-12 p-0">
                    @foreach ($fields as $f)
                    <div id="field-{{ $f->FieldID }}" class="field-content">
                        @if ($f->FieldID == 1)
                        @include('pages.fields.field_one')
                        @elseif ($f->FieldID == 2)
                        @include('pages.fields.field_two')
                        @elseif ($f->FieldID == 3)
                        @include('pages.fields.field_three')
                        @elseif ($f->FieldID == 4)
                        @include('pages.fields.field_four')
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            document.querySelectorAll('.product_menu-field .nav-link').forEach(function(element){
                element.addEventListener('click', function (e) {
                    let nextEl = element.nextElementSibling;
                    let parentEl  = element.parentElement;
                    if(nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);
                        if(nextEl.classList.contains('show')){
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            if(opened_submenu){
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                });
            })
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.field-link').click(function(e){
                e.preventDefault();
                var fieldId = $(this).data('field-id');
                $('.field-content').removeClass('active').hide();
                $('#field-' + fieldId).addClass('active').show();
            });

            // Optional: Automatically show the first field content on page load
            $('.field-content:first').addClass('active').show();
        });
    </script>
</section>
<!--=========== END COURSE BANNER SECTION ================-->
@endsection
