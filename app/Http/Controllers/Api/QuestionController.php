<?php

namespace App\Http\Controllers\api;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $question = Question::all();
        return $question ;
    }
}
