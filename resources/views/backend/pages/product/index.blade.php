@extends('backend.layouts.app')
@section('title', __('Products'))
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">All Product</h6>
                <h6><a class="btn btn-primary" href="{{ route('products.create') }}">Add New Product</a></h6>
            </div>
            <hr />
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Sl No.</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Buyer Name & Address</th>
                                <th scope="col">Organization Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $key => $product)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ ucfirst($product->buyer_name) }} <br> {{ucfirst($product->buyer_address)}}</td>
                                    <td>{{ ucfirst($product->organization->name) }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}">
                                            <i class="fa-solid fa-pencil btn btn-outline-info "></i>    
                                        </a> &nbsp;
                                        <a href="{{ route('products.show', $product->id) }}"><i class="fa-regular fa-eye btn btn-outline-primary"></i></a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none"><i class="fa-solid fa-trash btn btn-outline-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"><h4>No data found</h4></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
