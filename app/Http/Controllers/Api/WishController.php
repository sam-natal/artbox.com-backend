<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishes;
use App\Models\Art;
//use Illuminate\Database\QueryException;
use Illuminate\Database\QueryException;

class WishController extends Controller
{

    function index(Request $request){
        $arts = Wishes::where('customer_id', $request->id)
        ->join('art', 'art.id', '=', 'wishes.art_id')
        ->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    function checkWish(Request $request){
        $available = Wishes::where('customer_id', $request->uID)
        // ->where('art_id', $request->art_id)
        ->get();

        return response()->json([
            'status' => 200,
            'check' => $available,
        ]);
    }


    function addWish(Request $request){
        try{
            Wishes::create([
                'customer_id' => $request->customer_id,
                'art_id' => $request->art_id,
           ]);
            return response()->json([
                'status' => 200,
                'message' => 'Art added to your wish list successful.',
            ]);
        }catch(QueryException){
            return response()->json([
                'status' => 401,
                'message' => 'This art is on your wishlist already.',
            ]); 
        }
    
    }

    function deleteWish(Request $request){
        Wishes::where('customer_id','=', $request->customer_id)
        ->where('art_id', '=', $request->art_id)
        ->delete();

        $arts = Wishes::where('customer_id', $request->customer_id)
        ->join('art', 'art.id', '=', 'wishes.art_id')
        ->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

}
