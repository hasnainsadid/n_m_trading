@extends('backend.layouts.app')
@section('title', __('Product View'))
{{-- @dd($product) --}}
@section('content')
    <div class="card">
        <h3 class="card-title text-center py-3">{{ __('Purchase Account Book') }}</h3>
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-tools">
                <span><strong>Name:</strong> {{ $product->organization->name }}</span> <br>
                <span><strong>Address:</strong> {{ $product->organization->address }}</span> <br>
                <span><strong>BIN No:</strong> {{ $product->organization->bin_no }}</span> <br>
            </div>
            <div class="card-tools float-end">
                <span><strong>Product Name:</strong> {{ $product->product_name }}</span> <br>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-responsive-lg table-bordered text-center">
                <thead style="align-items: center">
                    <tr>
                      <th rowspan="2">Sl. No</th>
                      <th rowspan="2">Date</th>
                      <th colspan="2">Opening Balance of Inventory</th>
                      <th colspan="9">Purchase Material</th>
                      <th colspan="2">Closing Balance of Inventory</th>
                      <th rowspan="2">Note</th>
                    </tr>
                    <tr>
                      <!-- Child headers for "Opening Balance of Inventory" -->
                      <th>Unit</th>
                      <th>Price</th>
                      <!-- Child headers for "Purchase Material" -->
                      <th>Bill of Entry No</th>
                      <th>Date</th>
                      <th>Buyer Name</th>
                      <th>Buyer Address</th>
                      <th>Buyer BIN No</th>
                      <th>Unit</th>
                      <th>Price</th>
                      <th>Supplementary Duty</th>
                      <th>VAT %</th>
                      <!-- Child headers for "Closing Balance of Inventory" -->
                      <th>Unit</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                <tbody>
                    @php
                        $purchase = App\Models\Purchase::where('product_id', $product->id)->get();
                        $product = App\Models\Product::find($product->id);
                        @endphp
                    @forelse ($purchase as $key => $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ Carbon\Carbon::parse(@$item->date)->format('d-m-Y') }}</td>
                        <td>{{ $key == 0 ? 0 : @$item->obi_unit }}</td>
                        <td>{{ $key == 0 ? 0 : @$item->obi_price }}</td>
                        <td>{{ @$item->pm_bill_of_entry }}</td>
                        <td>{{ @$item->pm_bill_of_entry_date }}</td>
                        <td>{{ @$product->buyer_name }}</td>
                        <td>{{ @$product->buyer_address }}</td>
                        <td>{{ @$product->buyer_bin_no }}</td>
                        <td>{{ @$item->pm_unit }}</td>
                        <td>{{ @$item->pm_price_without_vat }}</td>
                        <td>{{ @$item->pm_supplementary_duty ?? 0}}</td>
                        <td>{{ @$item->pm_vat }}</td>
                        <td>{{ @$item->cbi_unit }}</td>
                        <td>{{ @$item->cbi_price }}</td>
                        <td>{{ @$item->note }}</td>
                        @empty
                        <td colspan="15">No data found</td>
                    </tr>
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection