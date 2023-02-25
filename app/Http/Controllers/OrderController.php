<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function index(){

    $orders = Order::all();
    return $orders ;

   }

   public function store(Request $request){

    $order = $request->all();
    $service = $order['service'];
    $student = $order['user_id'];
    $instructor = $order['instructor'];
    $track = $order['track'];
    $price = $order['price'];
    $attachement = $order['attachement'];
    $appointment = $order['appointment'];
    $vedio_link = $order['vedio_link'];
    $evaluation = $order['evaluation'];

    Order::create([

        'service_id'=> $service ,
        'user_id' => $student ,
        'instructor_id'=> $instructor ,
        'track_id' => $track ,
        'price' => $price ,
        'attachement' => $attachement ,
        'appointment'=> $appointment ,
        'vedio_link' => $vedio_link ,
        'evaluation' => $evaluation

    ]);

    return 'done' ;

   }

   public function destory($id){
    Order::find($id)->delete();
     return redirect('/orders') ;

   }

   public function update(Request $request , $id){
    $orderup = Order::findOrFail($id);
    $order = $request->all();
    $service = $order['service'];
    $student = $order['user_id'];
    $instructor = $order['instructor'];
    $track = $order['track'];
    $price = $order['price'];
    $attachement = $order['attachement'];
    $appointment = $order['appointment'];
    $vedio_link = $order['vedio_link'];
    $evaluation = $order['evaluation'];

    $orderup->update([

        'service_id'=> $service ,
        'user_id' => $student ,
        'instructor_id'=> $instructor ,
        'track_id' => $track ,
        'price' => $price ,
        'attachement' => $attachement ,
        'appointment'=> $appointment ,
        'vedio_link' => $vedio_link ,
        'evaluation' => $evaluation

    ]);

    return 'done' ;

   }
}
