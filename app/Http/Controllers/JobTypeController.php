<?php

namespace App\Http\Controllers;

use App\Models\Job_Type;
use App\Http\Requests\StoreJob_TypeRequest;
use App\Http\Requests\UpdateJob_TypeRequest;
use App\Models\JobType;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobtype=JobType::select('id', 'name')
        ->get();

        dd($jobtype);

        return view('jobtype', compact('jobtype'));
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
    public function store(StoreJob_TypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobType $job_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobType $job_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJob_TypeRequest $request, JobType $job_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobType $job_Type)
    {
        //
    }
}
