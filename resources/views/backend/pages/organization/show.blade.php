@extends('backend.layouts.app')
@section('title', __('Edit Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">All Organizations</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.index') }}">Edit Organizations</a></h6>
            </div>
            <div class="card">
                <div class="card-body">
                    Here is the main content here....
                    <ul>
                        <li>khata 1</li>
                        <li>khata 2</li>
                        <li>khata 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection