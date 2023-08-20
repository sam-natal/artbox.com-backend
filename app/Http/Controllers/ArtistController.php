<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;


class ArtistController extends Controller
{
    public function get_artists()
    {
        $artists = Artist::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 200,
            'artists' => $artists,
        ]);
    }

    //A function to add an art to the customers website
    public function add_artist(Request $request)
    {
        $file = $request->hasFile('profile_pic');
        if ($file) {
            $newfile = $request->file('profile_pic');
            $file_path = $newfile->store('public/images');
            //dd(asset('/storage/'.$file_path));

            Artist::create(
                [
                    'first_name' => $request->f_name,
                    'last_name' => $request->l_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'bio' => $request->bio,
                    'profile_picture' => $file_path,
                ]

            );
        }

        return redirect('/allartists');
    }

    //A function to delete an art from the art database
    public function edit_artist(Request $request)
    {
        $artist = Artist::where('id', '=', $request->id)->get();
        return view('edit_artist', compact('artist'));
    }

    //A function to save edited art to the database
    public function edited_artist(Request $request)
    {
        $file = $request->hasFile('profile_pic');
        if ($file) {
            $newfile = $request->file('profile_pic');
            $file_path = $newfile->store('public/images');

            Artist::where('id', $request->id)
                ->update(
                    [
                        'first_name' => $request->f_name,
                        'last_name' => $request->l_name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'bio' => $request->bio,
                        'profile_picture' => $file_path,
                    ]
                );
        } else {

            Artist::where('id', $request->id)
                ->update(
                    [
                        'first_name' => $request->f_name,
                        'last_name' => $request->l_name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'bio' => $request->bio,
                    ]
                );
        }
        return redirect('/allartists');
    }

    //A function to delete an art from the art database
    public function delete_artist(Request $request)
    {
        Artist::where('id', '=', $request->id)->delete();
        return redirect('/allartists');
    }


    //A function for fetching a specific art work by an ID
    function fetchArtistById(Request $request)
    {
        $artist = Artist::where('id', $request->id)
            // ->join('art', 'art.category_id', '=', 'art_category.category_id')
            ->get();

        return response()->json([
            'status' => 200,
            'artist' => $artist,
        ]);
    }
}
