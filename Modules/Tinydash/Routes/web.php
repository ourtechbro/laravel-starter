<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::group(
        ['prefix' => 'dashboard'],
        function () {
            Route::get('/{type?}', function ($type = 'default') {
                return view('tinydash::admin.dashboard.' . str_replace('-','_',$type));
            })->name('dashboard')->where('type', 'default|analytics|ecommerce|saas|system');
        }
    );

    Route::group(
        ['prefix' => 'ui-elements'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.ui-elements.' . str_replace('-','_',$type));
            })->name('ui-elements')->where('type', 'colors|typography|icons|buttons|notifications|modals|tabs_and_accordion|progress');
        }
    );

    Route::get('/widgets', function () {
        return view('tinydash::admin.widgets');
    })->name('widgets');

    Route::group(
        ['prefix' => 'forms'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.forms.' . str_replace('-','_',$type));
            })->name('forms')->where('type', 'basic_elements|advanced_elements|validation|wizard|layouts|file_upload');
        }
    );

    Route::group(
        ['prefix' => 'tables'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.tables.' . str_replace('-','_',$type));
            })->name('tables')->where('type', 'basic_tables|advanced_tables|data_tables');
        }
    );


        Route::get('/charts/{type}', function ($type) {
            return view('tinydash::admin.charts.' . str_replace('-','_',$type));
        })->name('charts')->where('type','inline_chart|chartjs|apex_charts|datamaps');

    Route::group(
        ['prefix' => 'apps'],
        function () {
            Route::get('/calender', function () {
                return view('tinydash::admin.calendar');
            })->name('calender');

            Route::group(
                ['prefix' => 'contacts'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('tinydash::admin.contacts.' . str_replace('-','_',$type));
                    })->name('contacts')->where('type', 'contact-list|contact-grid|new-contact');
                }
            );

            Route::group(
                ['prefix' => 'profile'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('tinydash::admin.profile.' . str_replace('-','_',$type));
                    })->name('profile')->where('type', 'overview|settings|security|notifications');
                }
            );

            Route::group(
                ['prefix' => 'file-manager'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('tinydash::admin.file-manager.' .str_replace('-','_',$type));
                    })->name('file-manager')->where('type', 'files-list|files-grid');
                }
            );

            Route::group(
                ['prefix' => 'help-desk'],
                function () {
                    Route::get('/{type}', function ($type) {
                        return view('tinydash::admin.help_desk.' . str_replace('-','_',$type));
                    })->name('help-desk')->where('type', 'home|tickets|ticket_detail|faq');
                }
            );
        }
    );

    Route::group(
        ['prefix' => 'pages'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.pages.' . str_replace('-','_',$type));
            })->name('pages')->where('type','orders|timeline|invoice|page_404|page_500|blank');
        }
    );

    Route::group(
        ['prefix' => 'authentication'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.authentication.' . str_replace('-','_',$type));
            })->name('authentication')->where('type', 'auth_login_1|auth_login_2|auth_register|auth_reset_password|auth_confirm_password');
        }
    );

    Route::group(
        ['prefix' => 'layout'],
        function () {
            Route::get('/{type}', function ($type) {
                return view('tinydash::admin.layout.' . str_replace('-','_',$type));
            })->name('layout')->where('type', 'default|top_navigation|boxed');
        }
    );
});
