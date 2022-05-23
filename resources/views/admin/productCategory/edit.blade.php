@extends('layouts.admin-master')
@section('title')
    @lang('translation.Dashboard')
@endsection

<x-select2 />

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            Edit Product Category
        @endslot
        @slot('title')
            Dashboard
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <x-alert />
            <x-aire::form method="PATCH" :action="route('admin.product-category.update', $productCategory->id)" class="card" multipart="true">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Category</h4>
                    {{-- <p class="card-title-desc">Halaman ini berfungsi untuk membuat pengguna baru.</p> --}}
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label input-required">Name</label>
                        <div class="col-md-10">
                            <x-aire::input id="name" name="name" :value="old('name', $productCategory->name)" placeholder="Product Category Name" />
                            <x-aire::hidden id="old_name" name="old_name" :value="old('name', $productCategory->name)" placeholder="" />
                            <x-aire::hidden id="slug" name="slug" :value="old('name', $productCategory->slug)" placeholder="" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-md-2 col-form-label input-required">Description</label>
                        <div class="col-md-10">
                            <x-aire::input id="description" name="description" :value="old('description', $productCategory->description)"
                                placeholder="Product Category Description" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-md-2 col-form-label">Image</label>
                        <div class="col-md-10">
                            <div class="input-group col-md-10">
                                <span class="input-group-btn col-md-2 p-0">
                                    <a id="lfm" data-input="thumbnail2" data-preview="holder"
                                        class="btn btn-primary w-100 waves-effect waves-light">
                                        <i class="fa fa-picture-o"></i> Choose Image
                                    </a>
                                </span>
                                <input type="text" name="image" id="thumbnail2" class="form-control col-md-10" readonly
                                    value="{{ $productCategory->image }}">
                            </div>
                            <a href="{{ $productCategory->image }}" id="linkholder" target="_blank">
                                <img src="{{ $productCategory->image }}" id="holder"
                                    style="margin-top:15px;max-height:100px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <x-aire::submit value="Simpan" class="waves-effect waves-light" />
                    </div>
                </div>
            </x-aire::form>
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
    <script src="{{ url('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>

    <script>
        const button2 = document.querySelector('#lfm');
        const thumbnail2 = document.querySelector('#thumbnail2');
        const linkholder = document.querySelector('#linkholder');
        const holder = document.querySelector('#holder');
        button2.addEventListener('mouseleave', function() {
            holder.src = thumbnail2.value;
            // change linkholder href to thumbnail2 value
            linkholder.href = thumbnail2.value;
        });
    </script>
@endpush
