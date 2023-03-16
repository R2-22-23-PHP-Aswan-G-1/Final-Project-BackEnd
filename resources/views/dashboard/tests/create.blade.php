@extends('layouts.dashboard')
@section('content')

<div></div>
<form action="{{ route('tests.store') }}" method="post">
@csrf
<input type="number" value="{{ $subtrack->id }}" hidden name="subtrack_id">
    <label for="">Question Body</label>
    <input type="text" name="body">
    <hr>
    <label for="">Answers</label>
    <input type="text" name="answers[]">
    <input type="text" name="answers[]">
    <input type="text" name="answers[]">
    <input type="text" name="answers[]">
    <label for="">Correct Answer</label>
    <input type="text" name="correct">
    <input type="submit" value="submit">
</form>

@endsection