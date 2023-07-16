<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\DashboardController;


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

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(
        ['prefix' => 'administrator'],
        function () {
            Route::get('/users', [AdministratorController::class, 'users'])->name('users');
            Route::get('/roles', [AdministratorController::class, 'roles'])->name('roles');
            Route::get('/permissions', [AdministratorController::class, 'permissions'])->name('permissions');
        }
    );


    Route::group(
        ['prefix' => 'settings'],
        function () {
            Route::get('/', function() {
                return view('admin.settings.settings');
            })->name('settings.settings');

            Route::get('settings/language/',function(Request $request){
                App::setLocale($request->lang);
                session()->put('locale', $request->lang);

                return redirect()->back();
            })->name('changeLang');

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
