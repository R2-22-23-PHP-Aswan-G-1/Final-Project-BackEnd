@extends('layouts.dashboard')
@section('content')

@foreach ($questions as $question)
<h3>{{ $question->question_body }}</h3>    
@endforeach
@endsection