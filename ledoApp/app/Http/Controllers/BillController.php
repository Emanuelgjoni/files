<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;
use App\Models\User;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        return view('home', ['bill' => Bill::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillRequest $request)
    {
        $request->validate([
            'data' => 'required',
            'pershkrimi' => 'required',
            'Kategoria' => 'required',
            'Cmimi' => 'required',
            'sasi' => 'required',
            'TotalPaTVSHimi' => 'required',
            'TVSH' => 'required',
            'TotalmeTVSH' => 'required',
            'user_id' => 'required',
        ]);
      
        Bill::create([
            'data' => $request->data,
            'pershkrimi' => $request->pershkrimi,
            'Kategoria' => $request->Kategoria,
            'Cmimi' => $request->Cmimi,
            'TotalPaTVSHimi' => $request->TotalPaTVSHimi,
            'TVSH' => $request->TVSH,
            'TotalmeTVSH' => $request->TotalmeTVSH,
            'sasi' => $request->sasi,
            'user_id' => $request->user_id,


        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBillRequest  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
