<?php

use Illuminate\Support\Facades\Route;
use Modules\Language\Http\Controllers\LanguagesController;
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

$config = array_merge(config('translation-manager.route'), ['namespace' => 'Modules\Language\Http\Controllers']);
Route::group($config, function($router)
{
    $router->get('view/{groupKey?}', 'LanguagesController@getView')->where('groupKey', '.*');
    $router->get('/{groupKey?}', 'LanguagesController@getIndex')->where('groupKey', '.*')->name('settings.language');
    $router->post('/add/{groupKey}', 'LanguagesController@postAdd')->where('groupKey', '.*');
    $router->post('/update', 'LanguagesController@update')->where('groupKey', '.*')->name('lang.update');
    $router->post('/groups/add', 'LanguagesController@postAddGroup');
    $router->post('/delete/{groupKey}/{translationKey}', 'LanguagesController@postDelete')->where('groupKey', '.*');
    $router->post('/import', 'LanguagesController@postImport');
    $router->post('/find', 'LanguagesController@postFind');
    $router->post('/locales/add', 'LanguagesController@postAddLocale')->name('locale.store');
    $router->post('/locales/remove', 'LanguagesController@removeLocale')->name('locale.delete');
    $router->post('/publish/{groupKey}', 'LanguagesController@postPublish')->where('groupKey', '.*');
    $router->post('/translate-missing', 'LanguagesController@postTranslateMissing');
});
