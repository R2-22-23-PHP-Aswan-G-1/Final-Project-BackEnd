<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\QuestionResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ReplyResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\instructorResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Order;

class UserController extends Controller
{
    public function index()
    {

        return User::all();
    }
    public function show()
    {

        return (['message' => 'success', 'data' => new instructorResource(Auth::user()->instructor)]);
    }
    //get user question
    public function getUserQuestions($user_id)
    {

        $user = User::find($user_id);
        return $user->question;
    }

    //get user replies 
    public function getUserReplies($user_id)
    {

        $user = User::find($user_id);
        return $user->reply;
    }

    //get user orders
    public function getUserOrders($user_id)
    {
        $user = User::find($user_id);
        return (['message' => 'success', 'order' => OrderResource::collection($user->order)]);
    }

    public function setUserImage(Request $request)
    {

        $request->image->storeAs("public/imgs", $request->image->getClientOriginalName());
        $request->validate([
            'image' => ['required', 'image']
        ]);
        $user_id = Auth::id();
        $user  = User::where('id', $user_id)->first();
        $user->image = $request->image->getClientOriginalName();
        $user->save();
        return (['message' => 'success']);
    }
    public function getUserImage(User $user)
    {
        return (['message' => 'success', 'image' => $user->image]);
    }
}
