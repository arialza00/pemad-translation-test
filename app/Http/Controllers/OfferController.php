<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offer = Offer::join('clients','client_id','=','clients.id')
        ->join('requests','request_id','=','requests.id')
        ->join('language','language_id','=','language.id')
        ->join('job_types','jobtype_id','=','job_types.id')
        ->join('jobs','job_id','=','jobs.id')
        ->select('offers.id', 'clients.first_name', 'clients.last_name', 'job_types.name as job_type', 'jobs.name as job', 'language.name as language')
        ->get();

        return view('offer', compact('offer'));
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
    public function store(StoreOfferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
