<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class certificateController extends Controller
{

    public function index()
    {
        //
    }


    public function store(StoreCertificateRequest $request)
    {   
        Certificate::create([
            'certificate' => $request->certificate,
            'instructor_id' => Auth::user()->instructor->id,
        ]);
        return (['message'=>'succes']);
    }

    public function show(Certificate $certificate)
    {
        //
    }


    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    public function destroy(Certificate $certificate)
    {
        //
    }
}
