@extends('backend.layouts.app')
@section('title', __('Add Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">Add New Organization</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.index') }}">All Organizations</a></h6>
            </div>
            {{-- <hr /> --}}
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('organizations.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="organization_name" class="form-label">Organization Name</label>
                            <input class="form-control mb-3" type="text" placeholder="Organizations Name" name="name"
                                id="organization_name" required>
                        </div>
                        <div class="form-group">
                            <label for="organization_address" class="form-label">Address</label>
                            <input type="text" class="form-control mb-3" placeholder="Address" name="address"
                                id="organization_address" required>
                        </div>

                        <div class="form-group">
                            <label for="organization_bin_no" class="form-label">Bin No.</label>
                            <input type="text" class="form-control mb-3" placeholder="Bin No." name="bin_no"
                                id="organization_bin_no" required>
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
