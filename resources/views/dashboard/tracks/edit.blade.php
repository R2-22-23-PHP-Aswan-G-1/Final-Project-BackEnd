@extends('layouts.dashboard')
@section('content')
<div class="col-lg-6 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title"> {{ $track->name }}</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $subtracks as $subtrack)
                            @php
                            $status = "";
                            if($subtrack->superTrack != null){
                                foreach ($subtrack->superTrack as $supertrack) {
                               if($track->id == $supertrack->id){
                                $status = "checked";
                               }
                            }
                            }
                            @endphp
                            <tr>
                                <th scope="row">{{ $subtrack->id }}</th>
                                <td>{{ $subtrack->name }}</td>
                                <td>
                                    <form action="{{ route('track.update' , $track->id) }}" method="POST">
                                        @csrf
                                        <input type="checkbox"   name="subtracks[]" value="{{ $subtrack->id }}" {{ $status }}></td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-success" value="send">
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection