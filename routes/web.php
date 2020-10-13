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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'employer', 'EmployerController@index'], function () {
        Route::get('/', 'EmployerController@index')->name('employer.index');
    });

    Route::resource('category', 'CategoryController');
    Route::match(['get', 'post'], 'setting', 'SettingController@setting')->name('setting');

});


Route::get('/{vue_capture}', function () {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');
