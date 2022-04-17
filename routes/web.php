<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\App;


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
            Route::get('/', function() {
                return view('admin.settings.settings');
            })->name('settings.settings');

            Route::get('settings/language/',function($lang){
                if($lang == 'bn')
                {
                    // return $lang;
                    App::setlocale($lang);
                }

            })->name('settings.language');

        }
    );

    Route::group(
        ['prefix' => 'profile'],
        function () {
            Route::get('/update', function() {
                return view('admin.users.profile-update');
            })->name('profile.update');
        }
    );

});

// Social login routes
Route::get('auth/{platform}', [SocialController::class, 'redirect'])
    ->where('platform', 'facebook|google|twitter|github');

Route::get('auth/{platform}/callback', [SocialController::class, 'login'])
    ->where('platform', 'facebook|google|twitter|github');
