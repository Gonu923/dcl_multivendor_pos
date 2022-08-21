<?php

namespace App\Http\Controllers;

use App\Models\SubcatDiscount;
use App\Models\Vendor;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcatDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        $subcatDiscounts = SubcatDiscount::latest()->paginate(10);
        $subcats = Subcategory::all();
        return view('discounts.subcatdiscount', compact('subcatDiscounts', 'vendors', 'subcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcatDiscount = SubcatDiscount::create([
            'subcategory_id' => $request->subcategory_id,
            'vendor_id' => $request->vendor_id,
            'dcl_discount' => $request->dcl_discount,
            'vendor_discount' => $request->vendor_discount,
        ]);

        if (!$subcatDiscount) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating sub category based discount.');
        }
        return redirect()->route('subcatdiscounts.index')->with('success', 'Success, your sub category based discount have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubcatDiscount  $subcatDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(SubcatDiscount $subcatDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubcatDiscount  $subcatDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(SubcatDiscount $subcatDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubcatDiscount  $subcatDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubcatDiscount $subcatDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubcatDiscount  $subcatDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubcatDiscount $subcatDiscount)
    {
        //
    }
}
