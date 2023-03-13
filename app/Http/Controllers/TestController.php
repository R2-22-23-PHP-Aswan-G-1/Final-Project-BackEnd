<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   
    public function store(StoreTestRequest $request)
    {
        //
    }

   
    public function show(Test $test)
    {
        //
    }

    public function edit(Test $test)
    {
        //
    }

    public function update(UpdateTestRequest $request, Test $test)
    {
        //
    }

    public function destroy(Test $test)
    {
        //
    }
}
