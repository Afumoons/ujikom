@extends('layouts.admin-master')
@section('title')
    @lang('translation.Dashboard')
@endsection

<x-datatables />

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            User
        @endslot
        @slot('title')
            Dashboard
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <x-alert />
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">User List</h4>
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td> <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="btn btn-sm btn-warning border-0">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                            <form class="d-inline" method="post"
                                                action="{{ route('admin.user.destroy', $user->id) }}">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger border-0"
                                                    onclick="return confirm('Are you sure deleting this data?')">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
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
