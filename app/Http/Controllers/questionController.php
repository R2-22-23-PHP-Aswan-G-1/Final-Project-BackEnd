<?php

namespace App\Http\Controllers;

use App\Models\Subtrack;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function filter_subtrack_question(Subtrack $subtrack)
    {
        return View('dashboard.questions.index', ['questions' => $subtrack->question]);
    }
}
