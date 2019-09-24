<?php

namespace App\Http\Controllers;

use App\Product_Order;
use Illuminate\Http\Request;

class Product_OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Order  $product_Order
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Order $product_Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Order  $product_Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Order $product_Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Order  $product_Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_Order $product_Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Order  $product_Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Order $product_Order)
    {
        //
    }
}
