<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api routes require prefix of /api
//php doesn't use {}, use [] instead for everything (creepy)

// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             [
//                 'title' => 'Title One'
//             ],
//             [
//                 'title' => 'Title Two'
//             ]
//         ]
//     ]);
// });
