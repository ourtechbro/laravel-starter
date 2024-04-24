<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Livewire\Administrator\Roles\RoleCreate;
use App\Livewire\Administrator\Roles\RoleEdit;
use App\Livewire\Administrator\Roles\RoleList;
use App\Livewire\Administrator\Users\UserCreate;
use App\Livewire\Administrator\Users\UserEdit;
use App\Livewire\Administrator\Users\UserList;
use App\Livewire\Administrator\Permissions;
use App\Livewire\Dashboard;
use Livewire\Volt\Volt;

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

Route::get('/', function() {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/profile', 'admin.profile')->name('profile');
    Route::view('/settings', 'admin.settings')->name('settings');

    Route::group(
        ['prefix' => 'administrator'],
        function () {
            Route::get('/users', UserList::class)->name('users');
            Route::get('/users/create', UserCreate::class)->name('users.create');
            Route::get('/users/{id}/edit', UserEdit::class)->name('users.edit');

            Volt::route('roles', 'administrator.roles.index')->name('roles');
            Volt::route('roles/create', 'administrator.roles.create')->name('roles.create');
            Volt::route('roles/{id}/edit', 'administrator.roles.edit')->name('roles.edit');

            Route::get('/permissions', Permissions::class)->name('permissions');

            // Route::get('/permissions', [AdministratorController::class, 'permissions'])->name('permissions');
        }
    );




    Route::get('lang-change',function(Request $request){
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    })->name('changeLang');
});

// Auth routes
require __DIR__.'/auth.php';
