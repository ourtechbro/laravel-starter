<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdministratorController;
use App\Livewire\Administrator\Users\UserCreate;
use App\Livewire\Administrator\Users\UserEdit;
use App\Livewire\Administrator\Users\UserList;
use App\Livewire\RolesComponent;
use App\Livewire\Dashboard;

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

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::group(
        ['prefix' => 'administrator'],
        function () {
            Route::get('/users', UserList::class)->name('users');
            Route::get('/users/create', UserCreate::class)->name('users.create');
            Route::get('/users/{id}/edit', UserEdit::class)->name('users.edit');


            Route::get('/roles', RolesComponent::class)->name('roles');
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
