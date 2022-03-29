<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialController;
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
    return redirect()->route('dashboard');
});

// Auth routes
require __DIR__.'/auth.php';

// All static theme pages
require __DIR__.'/theme.php';

Route::middleware(['auth'])->group(function () {
    Route::group(
        ['prefix' => 'administrator'],
        function () {
            Route::get('/users', function() {
                return view('admin.administrator.users');
            })->name('users');

            Route::get('/roles', function () {
                return view('admin.administrator.roles');
            })->name('roles');

            Route::get('/permissions', function () {
                return view('admin.administrator.permissions');
            })->name('permissions');
        }
    );

    Route::group(
        ['prefix' => 'settings'],
        function () {
            Route::get('/general', function() {
                return view('admin.settings.general');
            })->name('settings.general');

            Route::get('/language', function () {
                return view('admin.settings.language');
            })->name('settings.language');
        }
    );
});

// Social login routes
Route::get('auth/{platform}', [SocialController::class, 'redirect'])
    ->where('platform', 'facebook|google|twitter|github');

Route::get('auth/{platform}/callback', [SocialController::class, 'login'])
    ->where('platform', 'facebook|google|twitter|github');
