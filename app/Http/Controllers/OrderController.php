<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Pusher\Pusher;

class OrderController extends Controller
{

	// public function index(Service $service)
	// {
	//     $options = array(
	// 		'cluster' => env('PUSHER_APP_CLUSTER'),
	// 		'encrypted' => true
	// 	);
	//     $pusher = new Pusher(
	// 		env('PUSHER_APP_KEY'),
	// 		env('PUSHER_APP_SECRET'),
	// 		env('PUSHER_APP_ID'),
	// 		$options
	// 	);
	//     $data = $service->orders;
	//     $pusher->trigger('my-channel', 'App\\Events\\MyEvent', $data);
	// }

	public function index(Service $service)
	{
		return View('dashboard.orders.index', ['orders' => $service->orders]);
	}
}
