<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;


class OrderItemController extends Controller
{
    function create(Request $request)
    {

        OrderItem::create(
            [
                'order_id' => $request->orderID,
                'art_id' => $request->artID,
                'qty' => $request->qty,

            ]

        );
    }
}
