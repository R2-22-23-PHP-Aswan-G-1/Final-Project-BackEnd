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
        Certificate::create([
            'certificate' => $request->certificate,
            'instructor_id' => Auth::user()->instructor->id,
        ]);
        $this->increasePoints(Auth::user()->instructor);
        return (['message' => 'succes']);
    }

    public function destroy(Certificate $certificate)
    {
        $allCertificates = Auth::user()->instructor->certificates->get();
        for ($i = 0; $i < count($allCertificates); $i++) {
            if ($certificate->id ==   $allCertificates[$i]->id) {
                $certificate->delete();
                return (['message' => 'success']);
            }
        }
        return (['message' => 'This Id Is Wrong']);
    }
}
