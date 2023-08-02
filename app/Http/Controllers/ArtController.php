<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;

class ArtController extends Controller
{

    public function index()
    {
        $arts = Art::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    public function addart(Request $request)
    {
        $file = $request->hasFile('image');
        if ($file) {
            $newfile = $request->file('image');
            $file_path = $newfile->store('public/images');
            //dd(asset('/storage/'.$file_path));

            Art::create(
                [
                    'title' => $request->title,
                    'description' => $request->description,
                    'width' => $request->width,
                    'height' => $request->height,
                    'category_id' => $request->category,
                    'orientation' => $request->orientation,
                    'price' => $request->price,
                    'image_path' => $file_path,
                ]

            );
        }

        return redirect('/allarts');
    }

    //A function to respond requests from search input button
    public function search(Request $request)
    {
        $arts = Art::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('category_name', 'like', '%' . $request->search . '%')
            ->orWhere('orientation', 'like', '%' . $request->search . '%')
            ->orWhere('price', 'like', '%' . $request->search . '%')
            ->join('art_category', 'art.category_id', '=', 'art_category.category_id')
            ->get();
        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function for responding filter art by category ID.
    function fetchArtByCategory(Request $request)
    {
        $arts = Art::where('category_id', $request->catID)
            ->where('id', '<>', $request->id)
            ->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function for responding filter art by orientation.
    function orientationFilter(Request $request)
    {
        if ($request->orientation == 'lan') {
            $arts = Art::where('orientation', $request->orientation)->get();
        } else {
            $arts = Art::where('orientation', $request->orientation)->get();
        }

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function for responding filter art by size.
    function sizeFilter(Request $request)
    {
        if ($request->size < 30) {
            $start = $request->size - 10;
            $end = $request->size;
            $arts = Art::whereBetween('width', [$start, $end])->get();
        } else {
            $arts = Art::where('width', '>=', $request->size)->get();
        }

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function for responding filter art by price.
    function priceFilter(Request $request)
    {
        if ($request->price == 25) {
            $arts = Art::where('price', '<', $request->price)->get();
        } elseif ($request->price <= 100) {

            $start = $request->price - 25;
            $end = $request->price;
            $arts = Art::where('price', '>=', $start)
                ->where('price', '<=', $end)
                ->get();
        } else {
            $arts = Art::where('price', '>=', $request->price)->get();
        }

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function  for responding page requests for each category.
    function categoryFilter(Request $request)
    {
        $arts = Art::where('category_id', $request->category)->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }

    //A function for fetching a specific art work by an ID
    function fetchArtById(Request $request)
    {
        $arts = Art::where('id', $request->id)
            ->join('art_category', 'art.category_id', '=', 'art_category.category_id')
            ->get();

        return response()->json([
            'status' => 200,
            'arts' => $arts,
        ]);
    }
}
