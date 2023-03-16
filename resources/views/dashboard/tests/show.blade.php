@extends('layouts.dashboard')
@section('content')

<h3 class="m-5">{{ $subtrack->name }}</h3>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h3>{{ $subtrack->name }}</h3>
                        <div class="d-flex">
                            <a href="">
                                <i class="fa-solid fa-pen-to-square m-5 fa-4x"></i>
                            </a>
                            <a href="{{ route('tests.create' , $subtrack) }}">
                                <i class="fa-solid fa-circle-plus m-5 fa-4x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @if (count($tests) > 0)
                @foreach ($tests as $test)
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">
                        <h3 class="text-danger">Q.</h3>
                        <h5 class="mt-1 ml-2">{{ $test->body }}</h5>
                    </div>
                    <div class="ans ml-2">
                        @foreach ($test->answers as $answer)
                        @php
                        $flag ="";
                           if ($answer->correct == 1){
                            $flag ="checked";
                        }  
                        @endphp
                        <label class="radio"> 
                            <input type="radio" name="{{ $test->id }}" value="{{ $answer->id }}" {{ $flag }}> <span>{{ $answer->body }}</span>
                        </label>                              
                        @endforeach
                    </div>
                </div>                    
                @endforeach
                <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection