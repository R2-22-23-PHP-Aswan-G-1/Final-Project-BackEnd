@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h4 class="header-title">{{ $track->name }}</h4>
                <br>
                <a class="ml-5" href="">delete</a>
                <a class="ml-5" href="">update</a>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subtracks as $subtrack)   
                            <tr>
                                <th scope="row">{{ $subtrack->id }}</th>
                                <td>{{ $subtrack->name }}</td>
                                <td>
                                   <a href="{{ route('track.questions.show',$subtrack->id) }}">
                                    <i class="fa-2x fa-solid fa-circle-question"></i> 
                                    </a>       
                                    <a href="{{ route('track.questions.show',$subtrack->id) }}">
                                        <i class="fa-2x fas fa-regular fa-users"></i>
                                    </a>                           
                            </td>
                            </tr>
                            @endforeach     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection