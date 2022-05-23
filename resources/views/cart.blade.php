@extends('layouts.front-master-layouts')
@section('title')
    @lang('translation.Boxed_Width')
@endsection

@push('css')
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
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
            <div class="col-xl-8">
                @foreach ($cart->items as $item)
                    <div class="card border shadow-none">
                        <div class="card-body">

                            <div class="d-flex align-items-start border-bottom pb-3">
                                <div class="me-4">
                                    <img src="{{ $item->extra_info->image ?? '' }}" alt="" class="avatar-lg">
                                </div>
                                <div class="flex-1 align-self-center overflow-hidden">
                                    <div>
                                        <h5 class="text-truncate font-size-16"><a href="ecommerce-product-detail"
                                                class="text-dark">{{ $item->title }}</a></h5>
                                        {{-- <p class="mb-1">Color : <span class="fw-medium">Gray</span></p>
                                        <p>Size : <span class="fw-medium">08</span></p> --}}
                                    </div>
                                </div>
                                <div class="ml-2">
                                    <ul class="list-inline mb-0 font-size-16">
                                        <li class="list-inline-item">
                                            <x-aire::form method="POST" :action="route('removeItem', $item->hash)" class=""
                                                multipart="true">
                                                <button type="submit" class="text-muted px-2"
                                                    style="background: transparent;border:none;"
                                                    onclick="return confirm('Are you sure deleting this item?')">
                                                    <i class="uil uil-trash-alt"></i>
                                                </button>
                                            </x-aire::form>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted px-2">
                                                <i class="uil uil-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Price</p>
                                            <h5 class="font-size-16">{{ 'Rp. ' . $item->price }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Quantity</p>
                                            <div style="width: 110px;" class="product-cart-touchspin">
                                                <input data-toggle="touchspin" type="text" value="{{ $item->quantity }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Total</p>
                                            <h5 class="font-size-16">{{ 'Rp. ' . $item->total_price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
                <!-- end card -->

                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="{{ route('shop') }}" class="btn btn-link text-muted">
                            <i class="uil uil-arrow-left me-1"></i> Continue Shopping </a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <a href="ecommerce-checkout" class="btn btn-success">
                                <i class="uil uil-shopping-cart-alt me-1"></i> Checkout </a>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>

            <div class="col-xl-4">
                <div class="mt-5 mt-lg-0">
                    <div class="card border shadow-none">
                        <div class="card-header bg-transparent border-bottom py-3 px-4">
                            <h5 class="font-size-16 mb-0">Order Summary <span class="float-end">#MN0124</span></h5>
                        </div>
                        <div class="card-body p-4">

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end">{{ 'Rp. ' . $cart->subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax : </td>
                                            <td class="text-end">{{ 'Rp. ' . $cart->tax_amount }}</td>
                                        </tr>
                                        <tr class="bg-light">
                                            <th>Total :</th>
                                            <td class="text-end">
                                                <span class="fw-bold">
                                                    {{ 'Rp. ' . $cart->total }}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
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
        <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/ecommerce-cart.init.js') }}"></script>
    @endpush
