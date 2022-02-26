<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::group(
        ['prefix' => 'dashboard'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.dashboard.' . $type);
            })->name('dashboard')->where('type', tinydash_modules('dashboard','dashboard'));
        }
    );

    Route::group(
        ['prefix' => 'ui-elements'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.ui-elements.' . $type);
            })->name('ui-elements')->where('type', tinydash_modules('components', 'ui-elements'));
        }
    );


    Route::get('/widgets', function () {
        return view('admin.widgets');
    })->name('widgets');

    Route::group(
        ['prefix' => 'forms'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.forms.' . $type);
            })->name('forms')->where('type', tinydash_modules('components', 'forms'));
        }
    );

    Route::group(
        ['prefix' => 'tables'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.tables.' . $type);
            })->name('tables')->where('type', tinydash_modules('components', 'tables'));
        }
    );

    Route::group(
        ['prefix' => 'charts'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.charts.' . $type);
            })->name('charts')->where('type', tinydash_modules('components', 'charts'));
        }
    );

    Route::group(
        ['prefix' => 'contacts'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.contacts.' . $type);
            })->name('contacts')->where('type', tinydash_modules('apps', 'contacts'));
        }
    );

    Route::group(
        ['prefix' => 'profile'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.profile.' . $type);
            })->name('profile')->where('type', tinydash_modules('apps', 'profile'));
        }
    );

    Route::group(
        ['prefix' => 'file-manager'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.file_manager.' . $type);
            })->name('file-manager')->where('type', tinydash_modules('apps', 'file-manager'));
        }
    );

    Route::group(
        ['prefix' => 'help-desk'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.help_desk.' . $type);
            })->name('help-desk')->where('type', tinydash_modules('apps', 'help-desk'));
        }
    );

    Route::group(
        ['prefix' => 'pages'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.pages.' . $type);
            })->name('pages')->where('type', tinydash_modules('extra', 'pages'));
        }
    );

    Route::group(
        ['prefix' => 'authentication'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.authentication.' . $type);
            })->name('authentication')->where('type', tinydash_modules('extra', 'authentication'));
        }
    );

    Route::group(
        ['prefix' => 'layout'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.layout.' . $type);
            })->name('layout')->where('type', tinydash_modules('extra', 'layout'));
        }
    );


});
