@extends('layouts.dashboard')
@section('content')



<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Progress Table</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Progress</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($orders != null)
                            @foreach ($orders as $order)
                            @php
                            if ($order->status == "pendind"){
                                $width = 50;
                                $bg = "bg-primary";
                            }elseif ($order->status) {
                                // $width = 
                            }                          
                            @endphp
 
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->appointment }}</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $width }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><span class="status-p {{ $bg }}">{{ $order->status }}</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>                                   
                            @endforeach
                  
                            @endif
        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection