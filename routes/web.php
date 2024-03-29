<?php

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PagesController@index')->name('index');

Route::get('/photodart', 'PagesController@photodart')->name('photodart');

Route::get('/contactez-moi', 'PagesController@contact')->name('contact');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');

Route::get('/mentions-legales', 'PagesController@mentions')->name('mentions');

Route::get('/prestation/{name}', 'PagesController@prestation')->name('prestation');

Route::get('presta', 'PrestaFormController@create');
Route::post('presta', 'PrestaFormController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
