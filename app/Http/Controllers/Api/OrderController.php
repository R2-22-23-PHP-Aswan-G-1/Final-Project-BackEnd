<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Service;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return OrderResource::collection($orders);
    }
    public function show($order_id)
    {
        $order =  Order::find($order_id);
        return new OrderResource($order);
    }
    public function store(Request $request)
    {
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
            'service_id' => $service,
            'user_id' => $student,
            'instructor_id' => $instructor,
            'track_id' => $track,
            'price' => $price,
            'attachement' => $attachement,
            'appointment' => $appointment,
            'vedio_link' => $vedio_link,
            'evaluation' => $evaluation

        ]);
        return 'done';
    }
    public function destory($order_id)
    {
        Order::find($order_id)->delete();
        return $this->index();;
    }

    public function update(Request $request, $id)
    {
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

            'service_id' => $service,
            'user_id' => $student,
            'instructor_id' => $instructor,
            'track_id' => $track,
            'price' => $price,
            'attachement' => $attachement,
            'appointment' => $date,
            'vedio_link' => $vedio_link,
            'evaluation' => $evaluation

        ]);

        return $this->index();
    }
}
