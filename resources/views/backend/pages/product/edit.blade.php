@extends('backend.layouts.app')
@section('title', __('Add Product'))
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">Add New Product</h6>
                <h6><a class="btn btn-primary" href="{{ route('products.index') }}">All Products</a></h6>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input class="form-control mb-3" type="text" value="{{$product->product_name}}" name="product_name" id="product_name" required>
                        </div>
                        <div class="form-group">
                            <label for="buyer_name" class="form-label">Buyer Name</label>
                            <input type="text" class="form-control mb-3" value={{$product->buyer_name}} name="buyer_name"
                                id="buyer_name" required>
                        </div>

                        <div class="form-group">
                            <label for="buyer_address" class="form-label">Buyer Address</label>
                            <input type="text" class="form-control mb-3" placeholder="Buyer Address" name="buyer_address"
                                id="buyer_address" required>
                        </div>
                        
                        @php
                            $organizations = App\Models\Organization::all();
                        @endphp
                        <div class="form-group">
                            <label for="organization_id" class="form-label">Organization Name</label>
                            <select name="organization_id" id="organization_id" class="form-control mb-3" required>
                                <option value="">Select Organization</option>
                                @foreach ($organizations as $organization)
                                    <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
