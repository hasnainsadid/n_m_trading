@extends('backend.layouts.app')
@section('title', __('Edit Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">Add New Organization</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.index') }}">Edit Organizations</a></h6>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('organizations.update', $organization->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="organization_name" class="form-label">Organization Name</label>
                            <input class="form-control mb-3" type="text" value="{{ $organization->name }}" name="name" id="organization_name" required>
                        </div>
                        <div class="form-group">
                            <label for="organization_status" class="form-label">Status</label>
                            <select name="status" id="organization_status" class="form-control mb-3">
                                <option selected disabled>Select Status</option>
                                <option value="active" {{ $organization->status == 'active'?'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $organization->status == 'inactive'?'selected' : '' }}>Inactive</option>
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
