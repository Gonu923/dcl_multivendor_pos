<?php

namespace App\Http\Controllers;

use App\Models\CatDiscount;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;

class CatDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catDiscounts = CatDiscount::latest()->paginate(10);
        $vendors = Vendor::all();
        $categories = Category::all();
        return view('discounts.catdiscount', compact('catDiscounts', 'vendors', 'categories'));
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
        request()->validate([
            'vendor_id' => 'required|unique:cat_discounts,vendor_id',
            'category_id' => 'required',
            'dcl_discount' => 'required',
            'vendor_discount' => 'required',
        ],
        [
            'vendor_id.unique' => 'You have to set unique value!',
        ]);

        $catDiscount = CatDiscount::create([
            'category_id' => $request->category_id,
            'vendor_id' => $request->vendor_id,
            'dcl_discount' => $request->dcl_discount,
            'vendor_discount' => $request->vendor_discount,
        ]);

        if (!$catDiscount) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating category based discount.');
        }
        return redirect()->route('catdiscounts.index')->with('success', 'Success, your category based discount have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatDiscount  $catDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(CatDiscount $catDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatDiscount  $catDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(CatDiscount $catDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatDiscount  $catDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatDiscount $catDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatDiscount  $catDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatDiscount $catDiscount)
    {
        $catDiscount->delete();

        return response()->json([
           'success' => true
        ]);
    }
}
