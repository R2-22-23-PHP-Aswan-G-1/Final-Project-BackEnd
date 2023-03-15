<?php

namespace App\Http\Controllers;

use App\Models\Subtrack;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function show(Subtrack $subtrack){
        return View('dashboard.instructors.index' , ['instructors' => $subtrack->instructors]);
    }
}
