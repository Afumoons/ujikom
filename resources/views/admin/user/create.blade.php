@extends('layouts.admin-master')
@section('title')
    @lang('translation.Dashboard')
@endsection

<x-select2 />

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            Create User
        @endslot
        @slot('title')
            Dashboard
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <x-alert />

            <x-aire::form method="POST" :action="route('admin.user.store')" class="card" multipart="true">

                <div class="card-body">
                    <h4 class="card-title">Create User</h4>
                    {{-- <p class="card-title-desc">Halaman ini berfungsi untuk membuat pengguna baru.</p> --}}
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label input-required">Name</label>
                        <div class="col-md-10">
                            <x-aire::input id="name" name="name" :value="old('name')" placeholder="Nama pengguna" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-2 col-form-label input-required">Email</label>
                        <div class="col-md-10">
                            <x-aire::email id="email" name="email" :value="old('email')" placeholder="Email Pengguna" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-2 col-form-label input-required">Password</label>
                        <div class="col-md-10">
                            <x-aire::password id="password" name="password" :value="old('password')"
                                placeholder="Kata Sandi Pengguna" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="role" class="col-md-2 col-form-label input-required">Role</label>
                        <div class="col-md-10">
                            <select class="form-select select2" id="role" name="role">
                                <option value="0" selected="selected">
                                    --Choose Role--
                                </option>
                                @foreach ($user_roles as $key => $user_role)
                                    <option value="{{ $user_role }}" {{ old('role') == $user_role ? 'selected' : '' }}>
                                        {{ Str::title($user_role) }}</option>
                                @endforeach
                            </select>
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
