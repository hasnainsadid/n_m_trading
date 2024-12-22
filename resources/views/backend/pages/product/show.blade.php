@extends('backend.layouts.app')
@section('title', __('Product View'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Product View') }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" value="{{ $product->product_name }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection