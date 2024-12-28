<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.purchase.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purchase = new Purchase();
        $purchase->date = $request->date;
        $purchase->product_id = $request->product_id;
        // $purchase->organization_id = $request->organization_id;
        $purchase->pm_bill_of_entry = $request->pm_bill_of_entry;
        $purchase->pm_bill_of_entry_date = $request->pm_bill_of_entry_date;
        $purchase->pm_unit = $request->pm_unit;
        $purchase->pm_price_without_vat = $request->pm_price_without_vat;
        $purchase->pm_supplementary_duty = $request->pm_supplementary_duty;
        $purchase->pm_vat = $request->pm_vat;
        // $purchase->tm_unit = $request->tm_unit;
        // $purchase->tm_price = $request->tm_price;
        // $purchase->cbi_unit = $request->cbi_unit;
        // $purchase->cbi_price = $request->cbi_price;

        // dd($purchase);
        $purchase->save();

        $product = Product::find($request->product_id);
        $product->stock_price = $product->stock_price + $request->pm_price_without_vat;
        $product->stock_unit = $request->pm_unit + $product->stock_unit;
        $product->save();
        notify()->success('Purchase created successfully!');
        return redirect()->route('purchases.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
