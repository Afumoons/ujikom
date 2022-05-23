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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="product-detail">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="tab-content position-relative" id="v-pills-tabContent">

                                                <div class="product-wishlist">
                                                    <a href="#">
                                                        <i class="mdi mdi-heart-outline"></i>
                                                    </a>
                                                </div>
                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                    <div class="product-img">
                                                        <img src="{{ $product->image }}" alt=""
                                                            class="img-fluid mx-auto d-block"
                                                            data-zoom="{{ $product->image }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-center mt-2">
                                                <div class="col-sm-6 d-grid">
                                                    <x-aire::form method="POST" :action="route('addItem', $product->id)" class=""
                                                        multipart="true">

                                                        <button type="submit"
                                                            class="btn btn-primary btn-block waves-effect waves-light mt-2 me-1 w-100">
                                                            <i class="uil uil-shopping-cart-alt me-2"></i> Add to cart
                                                        </button>
                                                    </x-aire::form>
                                                </div>
                                                <div class="col-sm-6 d-grid">
                                                    <button type="button"
                                                        class="btn btn-light btn-block waves-effect  mt-2 waves-light">
                                                        <i class="uil uil-shopping-basket me-2"></i>Buy now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="mt-4 mt-xl-3 ps-xl-4">
                                    {{-- <h5 class="font-size-14"><a href="#" class="text-muted">Nike</a></h5> --}}
                                    <h4 class="font-size-20 mb-3">{{ $product->name }}</h4>

                                    <div class="text-muted">
                                        <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i>
                                            4.2</span>
                                        234 Reviews
                                    </div>

                                    <h5 class="mt-4 pt-2">
                                        {{ 'Rp. ' . $product->price }}
                                        {{-- <span class="text-danger font-size-14 ms-2">- 20 % Off</span> --}}
                                    </h5>

                                    <p class="mt-4 text-muted">{{ $product->description }}</p>

                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-3">

                                                    <h5 class="font-size-14">Specification :</h5>
                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> High
                                                            Quality
                                                        </li>
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All
                                                            Sizes
                                                            available</li>
                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4
                                                            Different
                                                            Color</li>
                                                    </ul>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mt-3">
                                                    <h5 class="font-size-14">Services :</h5>
                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                        <li><i class="uil uil-exchange text-primary me-1 font-size-16"></i>
                                                            10
                                                            Days Replacement</li>
                                                        <li><i class="uil uil-bill text-primary me-1 font-size-16"></i> Cash
                                                            on
                                                            Delivery available</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="mt-4">
                            <h5 class="font-size-14 mb-3">Reviews : </h5>
                            <div class="text-muted mb-3">
                                <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span>
                                234
                                Reviews
                            </div>
                            <div class="border p-4 rounded">
                                <div class="border-bottom pb-3">
                                    <p class="float-sm-end text-muted font-size-13">12 July, 2020</p>
                                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                                    <p class="text-muted mb-4">It will be as simple as in fact, it will be Occidental. It
                                        will
                                        seem like simplified</p>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-1">
                                            <h5 class="font-size-15 mb-0">Samuel</h5>
                                        </div>

                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="border-bottom py-3">
                                    <p class="float-sm-end text-muted font-size-13">06 July, 2020</p>
                                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.0</div>
                                    <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit</p>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-1">
                                            <h5 class="font-size-15 mb-0">Joseph</h5>
                                        </div>

                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="border-bottom py-3">
                                    <p class="float-sm-end text-muted font-size-13">26 June, 2020</p>
                                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.2</div>
                                    <p class="text-muted mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet
                                    </p>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-1">
                                            <h5 class="font-size-15 mb-0">Paul</h5>
                                        </div>

                                        <ul class="list-inline product-review-link mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
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
