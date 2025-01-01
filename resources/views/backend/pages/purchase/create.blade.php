@extends('backend.layouts.app')
@section('title', __('Add Purchase'))
@php
    $products = App\Models\Product::all();
@endphp
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">Add New Purchase</h6>
                <h6><a class="btn btn-primary" href="{{ route('products.index') }}">All Purchase</a></h6>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('purchases.store') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control mb-3" type="date" placeholder="Purchase Date" name="date"
                                id="date" required>
                        </div>
                        <div class="card p-3">
                            <h3>Product Info</h3>
                            <div class="form-group">
                                <label for="product_id" class="form-label">Product</label>
                                <select name="product_id" id="product_id" class="form-control mb-3" required>
                                    <option selected disabled value="">-----Select Product-----</option>
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="card p-3">
                            <h3>Purchase Materials</h3>
                            <div class="form-group">
                                <label for="pm_bill_of_entry" class="form-label">Bill of Entry Number</label>
                                <input type="text" class="form-control mb-3" placeholder="Bill of Entry Number"
                                    name="pm_bill_of_entry" id="pm_bill_of_entry" required>
                            </div>
                            <div class="form-group">
                                <label for="pm_bill_of_entry_date" class="form-label">Bill of Entry Date</label>
                                <input type="date" class="form-control mb-3" placeholder="Bill of Entry Date"
                                    name="pm_bill_of_entry_date" id="pm_bill_of_entry_date" required>
                            </div>
                            <div class="form-group">
                                <label for="pm_unit" class="form-label">Unit</label>
                                <input type="number" class="form-control mb-3" placeholder="Unit" name="pm_unit"
                                    id="pm_unit" required>
                            </div>
                            <div class="form-group">
                                <label for="pm_price" class="form-label">Price</label>
                                <input type="text" class="form-control mb-3" placeholder="Price"
                                    name="pm_price_without_vat" id="pm_price" required>
                            </div>
                            <div class="form-group">
                                <label for="pm_supplementary_duty" class="form-label">Supplementary duty (If applicable)</label>
                                <input type="number" class="form-control mb-3" placeholder="Supplementary duty"
                                    name="pm_supplementary_duty" id="pm_supplementary_duty">
                            </div>
                            <div class="form-group">
                                <label for="pm_vat" class="form-label">VAT</label>
                                <select name="pm_vat" id="pm_vat" class="form-select" required>
                                    <option selected disabled value="">-----Select VAT in %-----</option>
                                    <option value="15">15%</option>
                                    <option value="7.5">7.5%</option>
                                    <option value="5">5%</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note" class="form-label">Note (If applicable)</label>
                            <input type="text" class="form-control mb-3" placeholder="Enter Note"
                                name="note" id="note">
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
@push('scripts')
    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        $('#product_id').select2();
    </script>
@endpush
