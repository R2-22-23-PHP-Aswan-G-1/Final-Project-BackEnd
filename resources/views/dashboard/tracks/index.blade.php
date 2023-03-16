@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h4 class="header-title">{{ $track->name }}</h4>
                <br>
                <a class="ml-5" href="{{ route('track.edit' , $track->id) }}">Update</a>
                <a class="ml-5" href="">Delete</a>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subtracks as $subtrack)   
                            <tr>
                                <th scope="row">{{ $subtrack->id }}</th>
                                <td>{{ $subtrack->name }}</td>
                            </tr>
                            @endforeach     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
@endsection
