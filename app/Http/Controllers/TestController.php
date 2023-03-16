<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Answer;
use App\Models\Subtrack;
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function create(Subtrack $subtrack)
    {
        return View('dashboard/tests.create')->with(['subtrack' => $subtrack]);
    }

    public function store(Request $request)
    {
        $test = Test::create([
            'subtrack_id' => $request->subtrack_id,
            'body' => $request->body,
        ]);
        foreach ($request->answers as $answer) {
            if ($answer == $request->correct) {
                $correct = "1";
            } else {
                $correct = "0";
            }
            Answer::create([
                'test_id' => $test->id,
                'body' => $answer,
                'correct' => $correct
            ]);
        }
        return redirect()->back();
    }


    public function show(Subtrack $subtrack)
    {
        return View('dashboard/tests.show')->with(['tests' => $subtrack->tests, 'subtrack' => $subtrack]);
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
