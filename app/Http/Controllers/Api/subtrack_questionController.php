<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subtrack;
use App\Http\Resources\SubtrackResource;

class subtrack_questionController extends Controller
{
   public function index(){
      $subtracks = Subtrack::all()->sortDesc();
      return SubtrackResource::collection($subtracks);
   }
}
