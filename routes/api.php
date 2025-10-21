<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| File ini digunakan untuk mendefinisikan route API. Semua route di sini
| otomatis diberi prefix "api" dan middleware "api".
|
*/

Route::middleware('api')->get('/ping', function () {
    return response()->json(['status' => 'ok']);
});
