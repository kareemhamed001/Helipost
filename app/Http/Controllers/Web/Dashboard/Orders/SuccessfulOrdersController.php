<?php

namespace App\Http\Controllers\Web\Dashboard\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class SuccessfulOrdersController extends Controller
{
    function index(){
        $orders=Order::with(['user','receiver','items','batch'])->where('status',1)->paginate();
        return view('dashboard.orders.successfull.index',compact('orders'));
    }
}
