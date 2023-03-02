<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
   public function index(){

    $orders = Order::all();
    foreach($orders as $order){
       $order->user ;
       $order->track;
       $order->service ;
       $order->instructor->user ;
    }
    return $orders ;
   }

   public function show($user_id,$role){
    $checkuser = "user_id";
    if($role =='instructor'){$checkuser ="instructor_id" ; }
    $user_orders = Order::select('*')->where($checkuser,$user_id)->get();
    foreach($user_orders as $order){
        $order->user ;
        $order->track;
        $order->service ;
        $order->instructor->user;
    }
    return $user_orders;
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
     return $this->index(); ;

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
    $date = $order['date'];
    $vedio_link = $order['vedio_link'];
    $evaluation = $order['evaluation'];

    $orderup->update([

        'service_id'=> $service ,
        'user_id' => $student ,
        'instructor_id'=> $instructor ,
        'track_id' => $track ,
        'price' => $price ,
        'attachement' => $attachement ,
        'appointment'=> $date ,
        'vedio_link' => $vedio_link ,
        'evaluation' => $evaluation

    ]);

    return $this->index(); 

   }
}
