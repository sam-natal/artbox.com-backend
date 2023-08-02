<?php

use App\Http\Controllers\ArtController;
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
    //return view('welcome');
});

Route::get('/todayevents', function () {
    return view('todayevents');
});

Route::get('/addart', function () {
    return view('addart');
});

Route::get('/allarts', function () {
    $arts = DB::table('art')
    ->orderBy('created_at', 'desc')
    ->get();

    return view('allarts', compact('arts'));
});

Route::get('/managechat', function () {
    return view('managechat');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::post('/postart', [ArtController::class,'addart']);


//return View::make('todayevents', ['name' => 'James']);

Route::get('/dashboard', function () {
    $totalArts = DB::table('art')->count();
    return view('dashboard', compact('totalArts'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
