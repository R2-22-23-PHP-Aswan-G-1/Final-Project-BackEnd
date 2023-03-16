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
                                <th scope="col">Instructor</th>
                                <th scope="col">Price</th>
                                <th scope="col">Appointement</th>
                                <th scope="col">Progress</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($orders != null)
                            @foreach ($orders as $order)
                           
                            @if ($order->status == "pending")
                              <?php 
                              $width = 50;
                                $bg = "bg-primary";
                              ?>  
                            @elseif ($order->status == "working")
                            <?php 
                              $width = 85;
                                $bg="bg-warning"
                            ?>
                            @else
                            <?php 
                                $width = 100;
                                $bg="bg-success"
                            ?>
                            @endif                         
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->user->name }}</td>
                                @if ($order->instructor != null)
                                <td>{{ $order->instructor->user->name }}</td>
                                @else
                                <td> Not Determined</td>
                                @endif
                                <td>{{ $order->price}}</td>

                                <td>{{ $order->appointment }}</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar {{ $bg }}" role="progressbar" style="width: {{ $width }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
<div class="container">
    {{ $orders->links() }}
  
  </div>
@endsection


{{-- @endsection --}}