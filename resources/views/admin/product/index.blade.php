@extends('layouts.admin-master')
@section('title')
    @lang('translation.Dashboard')
@endsection

<x-datatables />

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            Product
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
                    <h4 class="card-title mb-4">Product List</h4>
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td> <a href="{{ route('admin.product.edit', $product->id) }}"
                                                class="btn btn-sm btn-warning border-0">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                            <form class="d-inline" method="post"
                                                action="{{ route('admin.product.destroy', $product->id) }}">
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
