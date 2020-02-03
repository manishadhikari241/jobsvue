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

//Route::get('admin/{any}', 'SpaController@index')->where('any', '.*');

Route::get('/admin/{vue_capture?}', function () {
    return view('admin.dashboard');
})->where('vue_capture', '[\/\w\.-]*');

Route::group(['namespace' => 'Admin', 'prefix' => 'admins', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'employer', 'EmployerController@index'], function () {
        Route::get('/', 'EmployerController@index')->name('employer.index');
    });

    Route::resource('category', 'CategoryController');
    Route::any('/setting', 'SettingController@setting')->name('setting');

});