<?php

namespace App\Http\Controllers;

use App\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print("Hola desde el index de SaleDetailController");
        //$sale_details = SaleDetail::all();
        //return view('sale_details.index', compact('sale_details'));
        $sale_details = DB::table('sale_details')->paginate(2);
        return view('sale_details.index', compact('sale_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SaleDetail::create($request->all());
        return redirect()->route('sale_details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleDetail $saleDetail)
    {
        return view('sale_details..edit', compact('saleDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleDetail $saleDetail)
    {
        $request->validate(
            [
                'amount' =>'required',
                'saledetail' =>'required',
                'price' =>'required',
            ]
        );

        $saleDetail->update($request->all());

        return redirect()->route('sale_details.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaleDetail  $saleDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleDetail $saleDetail)
    {
        $saleDetail->delete();

        return redirect()->route('sale_details.index');
    }
}
