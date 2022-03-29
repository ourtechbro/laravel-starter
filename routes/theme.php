<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::group(
        ['prefix' => 'dashboard'],
        function () {
            Route::get('/{type?}', function ($type = 'default') {

                return view('admin.dashboard.' . str_replace('-','_',$type));
            })->name('dashboard')->where('type', tinydash_modules('dashboard','dashboard'));
        }
    );

    Route::group(
        ['prefix' => 'ui-elements'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.ui-elements.' . str_replace('-','_',$type));
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
                return view('admin.forms.' . str_replace('-','_',$type));
            })->name('forms')->where('type', tinydash_modules('components', 'forms'));
        }
    );

    Route::group(
        ['prefix' => 'tables'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.tables.' . str_replace('-','_',$type));
            })->name('tables')->where('type', tinydash_modules('components', 'tables'));
        }
    );

    Route::group(
        ['prefix' => 'charts'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.charts.' . str_replace('-','_',$type));
            })->name('charts')->where('type', tinydash_modules('components', 'charts'));
        }
    );

    Route::group(
        ['prefix' => 'apps'],
        function () {
            Route::get('/calender', function () {
                return view('admin.calendar');
            })->name('calender');

            Route::group(
                ['prefix' => 'contacts'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('admin.contacts.' . str_replace('-','_',$type));
                    })->name('contacts')->where('type', tinydash_modules('apps', 'contacts'));
                }
            );

            Route::group(
                ['prefix' => 'profile'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('admin.profile.' . str_replace('-','_',$type));
                    })->name('profile')->where('type', tinydash_modules('apps', 'profile'));
                }
            );

            Route::group(
                ['prefix' => 'file-manager'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('admin.file-manager.' .str_replace('-','_',$type));
                    })->name('file-manager')->where('type', tinydash_modules('apps', 'file-manager'));
                }
            );

            Route::group(
                ['prefix' => 'help-desk'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('admin.help_desk.' . str_replace('-','_',$type));
                    })->name('help-desk')->where('type', tinydash_modules('apps', 'help-desk'));
                }
            );
        }
    );

    Route::group(
        ['prefix' => 'pages'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.pages.' . str_replace('-','_',$type));
            })->name('pages')->where('type', tinydash_modules('extra', 'pages'));
        }
    );

    Route::group(
        ['prefix' => 'authentication'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.authentication.' . str_replace('-','_',$type));
            })->name('authentication')->where('type', tinydash_modules('extra', 'authentication'));
        }
    );

    Route::group(
        ['prefix' => 'layout'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('admin.layout.' . str_replace('-','_',$type));
            })->name('layout')->where('type', tinydash_modules('extra', 'layout'));
        }
    );
});
