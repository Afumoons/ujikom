@extends('layouts.front-master-layouts')
@section('title')
    @lang('translation.Boxed_Width')
@endsection

@push('css')
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@section('body')

    <body data-layout="horizontal" data-topbar="colored" data-layout-size="boxed">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle')
            @endslot
            @slot('title')
                Shop
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header bg-transparent border-bottom">
                        <h5 class="mb-0">Filters</h5>
                    </div>

                    <div class="p-4">
                        <h5 class="font-size-14 mb-3">Categories</h5>
                        <div class="custom-accordion">
                            <a class="text-body fw-semibold pb-2 d-block" data-bs-toggle="collapse"
                                href="#categories-collapse" role="button" aria-expanded="false"
                                aria-controls="categories-collapse">
                                <i class="mdi mdi-chevron-up accor-down-icon text-primary me-1"></i> Footwear
                            </a>
                            <div class="collapse show" id="categories-collapse">
                                <div class="card p-2 border shadow-none">
                                    <ul class="list-unstyled categories-list mb-0">
                                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Formal Shoes</a></li>
                                        <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i>
                                                Sports
                                                Shoes</a></li>
                                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> casual Shoes</a></li>
                                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Sandals</a></li>
                                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Slippers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="p-4 border-top">
                        <div>
                            <h5 class="font-size-14 mb-4">Price</h5>

                            <input type="text" id="pricerange">
                        </div>
                    </div>

                    <div class="custom-accordion">
                        <div class="p-4 border-top">
                            <div>
                                <h5 class="font-size-14 mb-0"><a href="#filtersizes-collapse" class="text-dark d-block"
                                        data-bs-toggle="collapse">Sizes <i
                                            class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                <div class="collapse show" id="filtersizes-collapse">
                                    <div class="mt-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1">
                                                <h5 class="font-size-15 mb-0">Select Sizes</h5>
                                            </div>
                                            <div class="w-xs">
                                                <select class="form-select">
                                                    <option value="1">3</option>
                                                    <option value="2">4</option>
                                                    <option value="3">5</option>
                                                    <option value="4">6</option>
                                                    <option value="5" selected>7</option>
                                                    <option value="6">8</option>
                                                    <option value="7">9</option>
                                                    <option value="8">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="p-4 border-top">
                            <div>
                                <h5 class="font-size-14 mb-0"><a href="#filterprodductcolor-collapse"
                                        class="text-dark d-block" data-bs-toggle="collapse">Colors <i
                                            class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                <div class="collapse show" id="filterprodductcolor-collapse">
                                    <div class="mt-4">
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck1">
                                            <label class="form-check-label" for="productcolorCheck1"><i
                                                    class="mdi mdi-circle text-dark mx-1"></i> Black</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck2">
                                            <label class="form-check-label" for="productcolorCheck2"><i
                                                    class="mdi mdi-circle text-light mx-1"></i> White</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck3">
                                            <label class="form-check-label" for="productcolorCheck3"><i
                                                    class="mdi mdi-circle text-secondary mx-1"></i> Gray</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck4">
                                            <label class="form-check-label" for="productcolorCheck4"><i
                                                    class="mdi mdi-circle text-primary mx-1"></i> Blue</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck5">
                                            <label class="form-check-label" for="productcolorCheck5"><i
                                                    class="mdi mdi-circle text-success mx-1"></i> green</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck6">
                                            <label class="form-check-label" for="productcolorCheck6"><i
                                                    class="mdi mdi-circle text-danger mx-1"></i> Red</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck7">
                                            <label class="form-check-label" for="productcolorCheck7"><i
                                                    class="mdi mdi-circle text-warning mx-1"></i> Yellow</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" class="form-check-input" id="productcolorCheck8">
                                            <label class="form-check-label" for="productcolorCheck8"><i
                                                    class="mdi mdi-circle text-purple mx-1"></i> Purple</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="p-4 border-top">
                            <div>
                                <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse"
                                        class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i
                                            class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                <div class="collapse show" id="filterproduct-color-collapse">
                                    <div class="mt-4">
                                        <div class="form-check mt-2">
                                            <input type="radio" id="productratingRadio1" name="productratingRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="productratingRadio1">4 <i
                                                    class="mdi mdi-star text-warning"></i> & Above</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" id="productratingRadio2" name="productratingRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="productratingRadio2">3 <i
                                                    class="mdi mdi-star text-warning"></i> & Above</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" id="productratingRadio3" name="productratingRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="productratingRadio3">2 <i
                                                    class="mdi mdi-star text-warning"></i> & Above</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" id="productratingRadio4" name="productratingRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="productratingRadio4">1 <i
                                                    class="mdi mdi-star text-warning"></i></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="p-4 border-top">
                            <div>
                                <h5 class="font-size-14 mb-0"><a href="#filterproduct-discount-collapse"
                                        class="collapsed text-dark d-block" data-bs-toggle="collapse">Discount <i
                                            class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                                <div class="collapse" id="filterproduct-discount-collapse">
                                    <div class="mt-4">
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio1" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio1">50% or
                                                more</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio2" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio2">40% or
                                                more</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio3" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio3">30% or
                                                more</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio4" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio4">20% or
                                                more</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio5" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio5">10% or
                                                more</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="productdiscountRadio6" name="productdiscountRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="productdiscountRadio6">Less than
                                                10%</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        {{-- <h5>Showing result for "Shoes"</h5> --}}
                                        <h5>Showing all products</h5>
                                        <ol class="breadcrumb p-0 bg-transparent mb-2">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Footwear</a></li>
                                            <li class="breadcrumb-item active">Shoes</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-inline float-md-end">
                                        <div class="search-box ml-2">
                                            <div class="position-relative">
                                                <input type="text" class="form-control bg-light border-light rounded"
                                                    placeholder="Search...">
                                                <i class="mdi mdi-magnify search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                <li class="nav-item">
                                    <a class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">Sort
                                        by:</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Popularity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Newest</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Discount</a>
                                </li>

                            </ul>

                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="product-img pt-4 px-4">
                                                {{-- <div class="product-ribbon badge bg-danger">
                                                - 20 %
                                            </div> --}}
                                                <div class="product-wishlist">
                                                    <a href="#">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                    </a>
                                                </div>
                                                <img src="{{ $product->image }}" alt=""
                                                    class="img-fluid mx-auto d-block">
                                            </div>

                                            <div class="text-center product-content p-4">

                                                <h5 class="mb-1">
                                                    <a href="{{ route('shop-detail', $product->slug) }}"
                                                        class="text-dark">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>
                                                {{-- <p class="text-muted font-size-13">Black, Shoes</p> --}}

                                                <h5 class="mt-3 mb-0">
                                                    {{-- <span class="text-muted me-2"><del>$250</del></span> --}}
                                                    {{ 'Rp. ' . $product->price }}</h5>

                                                <ul class="list-inline mb-0 text-muted product-color">
                                                    <li class="list-inline-item">
                                                        Colors :
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="mdi mdi-circle text-danger"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="mdi mdi-circle text-dark"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="mdi mdi-circle text-light"></i>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-xl-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-img pt-4 px-4">

                                            <div class="product-wishlist">
                                                <a href="#">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </a>
                                            </div>
                                            <img src="{{ URL::asset('/assets/images/product/img-3.png') }}" alt=""
                                                class="img-fluid mx-auto d-block">
                                        </div>

                                        <div class="text-center product-content p-4">

                                            <h5 class="mb-1"><a href="#" class="text-dark">Puma P103
                                                    Shoes</a></h5>
                                            <p class="text-muted font-size-13">Purple, Shoes</p>

                                            <h5 class="mt-3 mb-0"><span
                                                    class="text-muted me-2"><del>$260</del></span> $250</h5>

                                            <ul class="list-inline mb-0 text-muted product-color">
                                                <li class="list-inline-item">
                                                    Colors :
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-purple"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-light"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-dark"></i>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-img pt-4 px-4">

                                            <div class="product-wishlist">
                                                <a href="#">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </a>
                                            </div>
                                            <img src="{{ URL::asset('/assets/images/product/img-4.png') }}" alt=""
                                                class="img-fluid mx-auto d-block">
                                        </div>

                                        <div class="text-center product-content p-4">

                                            <h5 class="mb-1"><a href="#" class="text-dark">Sports S120
                                                    Shoes</a></h5>
                                            <p class="text-muted font-size-13">Cyan, Shoes</p>

                                            <h5 class="mt-3 mb-0"><span
                                                    class="text-muted me-2"><del>$240</del></span> $230</h5>

                                            <ul class="list-inline mb-0 text-muted product-color">
                                                <li class="list-inline-item">
                                                    Colors :
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-info"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-success"></i>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-img pt-4 px-4">

                                            <div class="product-wishlist">
                                                <a href="#">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </a>
                                            </div>
                                            <img src="{{ URL::asset('/assets/images/product/img-5.png') }}" alt=""
                                                class="img-fluid mx-auto d-block">
                                        </div>

                                        <div class="text-center product-content p-4">

                                            <h5 class="mb-1"><a href="#" class="text-dark">Adidas AB23
                                                    Shoes</a></h5>
                                            <p class="text-muted font-size-13">Blue, Shoes</p>

                                            <h5 class="mt-3 mb-0"><span
                                                    class="text-muted me-2"><del>$240</del></span> $250</h5>

                                            <ul class="list-inline mb-0 text-muted product-color">
                                                <li class="list-inline-item">
                                                    Colors :
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-dark"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-light"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-primary"></i>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-img pt-4 px-4">
                                            <div class="product-ribbon badge bg-danger">
                                                - 20 %
                                            </div>
                                            <div class="product-wishlist">
                                                <a href="#">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </a>
                                            </div>
                                            <img src="{{ URL::asset('/assets/images/product/img-6.png') }}" alt=""
                                                class="img-fluid mx-auto d-block">
                                        </div>

                                        <div class="text-center product-content p-4">

                                            <h5 class="mb-1"><a href="#" class="text-dark">Nike N012
                                                    Shoes</a></h5>
                                            <p class="text-muted font-size-13">Gray, Shoes</p>

                                            <h5 class="mt-3 mb-0"><span
                                                    class="text-muted me-2"><del>$270</del></span> $260</h5>

                                            <ul class="list-inline mb-0 text-muted product-color">
                                                <li class="list-inline-item">
                                                    Colors :
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-dark"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="mdi mdi-circle text-light"></i>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- end row -->

                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Page 2 of 84</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination pagination-rounded mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i
                                                        class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i
                                                        class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->
    @endsection
    @push('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    @endpush
    @push('script')
        <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
    @endpush
