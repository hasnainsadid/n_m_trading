@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            @php
                                $total_organization = \App\Models\Organization::count();
                            @endphp
                            <p class="mb-0 text-secondary">Total Organizations</p>
                            <h4 class="my-1">{{$total_organization}}</h4>
                        </div>
                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            @php
                                $products = \App\Models\Product::count();
                            @endphp
                            <p class="mb-0 text-secondary">Total Products</p>
                            <h4 class="my-1">{{$products}}</h4>
                        </div>
                        <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-category'></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Store Visitors</p>
                            <h4 class="my-1">1543</h4>
                        </div>
                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
