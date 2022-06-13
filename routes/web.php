<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All listings
Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}',function($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function () {
//     return response("<h1>Hello World</h1>",200)
//     ->header('Content-Type','text/plain')
//     ->header('foo','bar')
//     ->header('biloSta','sta god');
// });

//where is a constraint in this case
//to block letter from appearing in the params

// Route::get('/posts/{id}', function($id){
//     //For debuging and stuff, use dd or ddd
//     // ddd($id);
//     // dd($request);
//     return response('Post ' . $id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request) {
//     //dd will show us in this case what is in the $request object
//     //you don't have to specify query with $request
//     return $request -> name . ' ' . $request->city;
// });
