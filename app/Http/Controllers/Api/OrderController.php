<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function create(Request $request){
        
        Order::create(
            [
                'customer_id' => $request->customerID,
                'total_due' => $request->totalDue,
              
            ]

        );
        $orderID = Order::orderBy('created_at','desc')->pluck('id')->first();

        return response()->json([
            'status' => 200,
            'ID' => $orderID,
        ]);
    }
}
