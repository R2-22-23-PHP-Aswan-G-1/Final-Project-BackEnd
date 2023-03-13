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
    public function store(StoreCertificateRequest $request)
    {
        // dd($request->certificate);
        $request->certificate->storeAs("public/imgs",$request->certificate->getClientOriginalName());
        Certificate::create([
            'certificate' => $request->certificate->getClientOriginalName(),
            'instructor_id' => Auth::user()->instructor->id,
        ]);
        return (['message' => 'succes']);
    }

    public function destroy(Certificate $certificate)
    {
        // $allCertificates = Auth::user()->instructor->certificates->get();
        // for ($i = 0; $i < count($allCertificates); $i++) {
        //     if ($certificate->id ==   $allCertificates[$i]->id) {
        //         $certificate->delete();
        //         return (['message' => 'success']);
        //     }
        // }
        
            $certificate->delete();

       
        return response()->json(['message' => 'success']);
    }
}
