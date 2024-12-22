@extends('backend.layouts.app')
@section('title', __('Edit Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">Show Organizations</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.index') }}">All Organizations</a></h6>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Sl No</th>
                            <th>Products</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $products = App\Models\Product::where('organization_id', $organization->id)->get();
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('products.show', $product->id) }}">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
