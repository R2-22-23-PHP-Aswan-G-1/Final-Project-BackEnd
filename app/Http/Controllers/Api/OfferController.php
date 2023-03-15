<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => ['required', 'exists:App\Models\Order,id'],
            'price' => ['required'],
        ]);
        $order = Order::where('id', $request->order_id);
        Offer::create([
            'price' => $request->price,
            'order_id' => $request->order_id,
            'instructor_id' => Auth::user()->instructor->id
        ]);
        return (['message' => 'success']);
    }
}
