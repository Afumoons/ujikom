@extends('layouts.front-master-layouts')
@section('title')
    @lang('translation.Boxed_Width')
@endsection
@section('body')

    <body data-layout="horizontal" data-topbar="colored" data-layout-size="boxed">
    @endsection
    @section('content')
        @component('common-components.breadcrumb')
            @slot('pagetitle')
            @endslot
            @slot('title')
                Home
            @endslot
        @endcomponent

        <div class="row">
            <div class="card p-5">
                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang!</h1>
                    <p class="lead">Di Toko Online Alat Kesehatan Afumoons</p>
                    <hr class="my-4">
                    <p>Mulai berbelanja dengan menekan menu shop</p>
                </div>
            </div>
        </div>
    @endsection
    @push('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    @endpush
