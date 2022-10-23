<?php

use Modules\SocialAuth\Http\Controllers\SocialController;
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

// Social login routes
Route::get('auth/{platform}', [SocialController::class, 'redirect'])
    ->where('platform', 'facebook|google|twitter|github');

Route::get('auth/{platform}/callback', [SocialController::class, 'login'])
    ->where('platform', 'facebook|google|twitter|github');
