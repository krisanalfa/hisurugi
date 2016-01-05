<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'], 'namespace' => 'HitenMitsurugi\Ryutsuisen\Http\Controllers'], function () {
    Route::resource('role', 'RoleController');

    Route::get('permission/bulk', ['as' => 'permission.bulk', 'uses' => 'PermissionController@bulk']);

    Route::resource('permission', 'PermissionController');
});
