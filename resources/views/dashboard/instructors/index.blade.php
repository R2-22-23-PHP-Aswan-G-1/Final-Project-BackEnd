@extends('layouts.dashboard')
@section('content')


<div class="col-lg-6 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Bordered Table</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">rate</th>
                                <th scope="col">points</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructors as $instructor)
                            <tr>
                                <th scope="row">{{ $instructor->id }}</th>
                                <td>{{ $instructor->user->name }}</td>
                                <td>{{ $instructor->rate }}</td>
                                <td>{{ $instructor->points }}</td>
                                <td><i class="ti-trash"></i></td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection