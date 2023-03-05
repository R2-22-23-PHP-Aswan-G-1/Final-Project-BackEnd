<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationRequest $request, Education $education): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education): RedirectResponse
    {
        //
    }
}
