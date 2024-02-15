<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Http\Requests\StoreBillRequest;
use App\Http\Requests\UpdateBillRequest;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bill=Bill::join('offers','offer_id','=','offers.id')
        ->join('clients','offers.client_id','=','clients.id')
        ->join('requests','offers.request_id','=','requests.id')
        ->join('language','offers.language_id','=','language.id')
        ->join('job_types','offers.jobtype_id','=','job_types.id')
        ->select('bill.id', 'clients.first_name', 'clients.last_name', 'job_types.name as job_type', 'jobs.name as job', 'language.name as language')
        ->get();

        // dd($client);

        return view('pages.client', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
