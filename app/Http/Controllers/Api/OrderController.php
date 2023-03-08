<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Service;
use App\Models\Supertrack;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return OrderResource::collection($orders);
    }

    public function show(Order $order)
    {
        return (['message'=>'success' , 'order'=>new OrderResource($order)]);
    }

    public function store(StoreOrderRequest $request)
    {
        Order::create([
            'service_id' => $request->service_id,
            'user_id' => Auth::id(),
            'track_id' => $request->track_id,
            'price' => $request->price,
            'appointment' => $request->appointment
        ]);
        return (['message' => 'success']);
    }

    public function destroy(Order $order)
    {
        if ($order->user_id == Auth::id()){
            $order->delete();
            return (['message'=>'success']);
        }else {
            return (['message'=>'permission denied']);
        }
    }

    public function acceptInstructor(Request $request)
    {
        $request->validate([
            'instructor_id' => ['required', 'exists:App\Models\Instructor,id'],
            'order_id' => ['required', 'exists:App\Models\Order,id']
        ]);
        $order = Order::where('id', $request->order_id);
        $order->update([
            'status' => "accepted",
            'instructor_id' => $request->instructor_id
        ]);
        return (['message' => 'success']);
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
    public function showOrderAccordingToTrack()
    {
        return OrderResource::collection(Auth::user()->instructor->supertrack->orders);
    }
}
