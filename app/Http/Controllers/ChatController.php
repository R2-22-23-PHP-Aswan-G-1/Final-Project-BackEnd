<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class ChatController extends Controller
{


    public function send(Request $request)
    {
        $sender = Auth::id();
        $msg = $request->msg;
        $reciver = $request->reciver;
        Chat::create([
            "message" => $msg,
            "sender_id" => auth()->id(),
            "reciver_id" => $reciver
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

        $data['message'] = $msg;
        $data['user'] = $sender;
        $pusher->trigger('my-channel', 'App\\Events\\MyEvent', $data);
        return (['message' => 'success']);
    }

    public function show(Request $request)
    {
        $reciver = $request->reciver;
        $sender = Auth::id();
        $s = Chat::whereIn('sender_id', [$sender, $reciver])->whereIn('reciver_id', [$sender, $reciver])->get();
    }
}
