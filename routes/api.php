<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'employer', 'EmployerController@index'], function () {
        Route::get('/', 'EmployerController@index')->name('employer.index');
    });

    Route::resource('category', 'CategoryController');
    Route::match(['get', 'post'], 'setting', 'SettingController@setting')->name('setting');

    Route::apiResource('job-level','JoblevelController');
    Route::apiResource('job-type','JobtypeController');
    Route::apiResource('blog-category','BlogCategoryController');
    Route::apiResource('blogs','BlogController');
    Route::get('/blogs', function () {
        return \App\Http\Resources\Blog::collection(\App\Model\Blog::all());
    });
    Route::apiResource('company-packages','CompanyPackageController');
    Route::apiResource('city','CityController');
    Route::apiResource('employer-industry','EmployerIndustryController');
    Route::apiResource('employer','EmployerController');
});

Route::apiResource('about', 'AboutController');
