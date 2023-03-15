<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Pusher\Pusher;
use App\Models\Instructor;
use App\Models\Offer;
use App\Models\Service;
use App\Models\Supertrack;
use Illuminate\Support\Facades\Auth;

use App\Http\traits\InstructorTrait;

class OrderController extends Controller
{
    use InstructorTrait;
    public function index()
    {
        $orders = Order::all();
        return OrderResource::collection($orders);
    }

    public function show(Order $order)
    {
        $role = false;
        if ($order->user_id == Auth::id()) {
            $role = true;
        }
        return (['message' => 'success', 'order' => new OrderResource($order), 'role' => $role]);
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
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $data = 'new order from'." ". Auth::user()->name;
        $pusher->trigger('my-channel', 'App\\Events\\MyEvent', $data);
        return (['message' => 'success']);
    }


    public function destroy(Order $order)
    {
        if ($order->user_id == Auth::id()) {
            $order->delete();
            return (['message' => 'success']);
        } else {
            return (['message' => 'permission denied']);
        }
    }

    public function acceptOffer(Offer $offer)
    {
        if (Auth::id() == $offer->order->user_id) {
            $order = $offer->order;
            $order->update([
                'price' => $offer->price,
                'status' => "accepted",
                'instructor_id' => $offer->instructor_id
            ]);
            return (['message' => 'success']);
        }
    }

    public function completeOrder(Order $order)
    {
        //update service table
        $service = $order->service;
        $service->OrderCounter += 1;
        $service->totalEarning += $order->price * 20 / 100;
        $service->save();
        $offers = $order->offers;
        $order->status = "completed";
        $order->save();
        Offer::where('order_id', $order->id)->delete();
        $this->increasePoints($order->instructor);
        return (['message' => 'success']);
    }
    public function showOrderAccordingToTrack()
    {
        return OrderResource::collection(Auth::user()->instructor->supertrack->orders);
    }
    public function showOrders()
    {
        return (['message' => 'success', 'orders' => OrderResource::collection(Auth::user()->orders)]);
    }
}
