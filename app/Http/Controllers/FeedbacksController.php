<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefeedbacksRequest;
use App\Http\Requests\UpdatefeedbacksRequest;
use App\Models\feedbacks;

class FeedbacksController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefeedbacksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(feedbacks $feedbacks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedbacks $feedbacks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefeedbacksRequest $request, feedbacks $feedbacks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedbacks $feedbacks)
    {
        //
    }
}