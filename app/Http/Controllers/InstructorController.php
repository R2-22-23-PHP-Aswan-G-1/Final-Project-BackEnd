<?php

namespace App\Http\Controllers;

use App\Models\Subtrack;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class InstructorController extends Controller
{
    public function show(Subtrack $track){
        return View('dashboard.instructors.index' , ['instructors' => $track->instructors]);
    }
}
