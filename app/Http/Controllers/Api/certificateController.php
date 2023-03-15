<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\traits\InstructorTrait;

class certificateController extends Controller
{
    use InstructorTrait;
    public function store(StoreCertificateRequest $request)
    {
        $request->certificate->storeAs("public/imgs",$request->certificate->getClientOriginalName());
        Certificate::create([
            'certificate' => $request->certificate->getClientOriginalName(),
            'instructor_id' => Auth::user()->instructor->id,
        ]);
        $this->increasePoints(Auth::user()->instructor);
        return (['message' => 'succes']);
    }

    public function destroy(Certificate $certificate)
    {   
            $certificate->delete();       
        return response()->json(['message' => 'success']);
    }
}
