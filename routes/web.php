<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\View;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
      return view('auth.login');
});

Route::get('/todayevents', function () {
    return view('todayevents');
});

Route::get('/addart', function () {
    $artists = DB::table('artists')
    ->get();

    return view('addart', compact('artists'));
});

Route::get('/allarts', function () {
    $arts = DB::table('art')
    ->orderBy('created_at', 'desc')
    ->get();

    return view('allarts', compact('arts'));
});

Route::get('/addartist', function () {
    return view('addartist');
});

Route::get('/allartists', function () {
    $artists = DB::table('artists')
    ->orderBy('created_at', 'desc')
    ->get();

    return view('allartists', compact('artists'));
});

Route::get('/managechat', function () {
    return view('managechat');
});

Route::get('/sales', function () {
    return view('sales');
});

//Route for adding new art on the database
Route::post('/postart', [ArtController::class,'addart']);

//Route for adding new artist on the database
Route::post('/add_artist', [ArtistController::class,'add_artist']);

//Route for deleting an art from the database
Route::post('/delete_art', [ArtController::class,'delete_art']);

//Route for deleting an art from the database
Route::post('/delete_artist', [ArtistController::class,'delete_artist']);

//Route to open an art for being edited
Route::post('/edit_art', [ArtController::class,'edit_art']);

//Route to open an artist to be edited
Route::post('/edit_artist', [ArtistController::class,'edit_artist']);

//Route for saving edited art
Route::post('/edited_art', [ArtController::class,'edited_art']);

//Route for saving edited artist
Route::post('/edited_artist', [ArtistController::class,'edited_artist']);

Route::get('/dashboard', function () {
    $totalArts = DB::table('art')->count();
    $totalArtists = DB::table('artists')->count();
    return view('dashboard', compact('totalArts','totalArtists'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
