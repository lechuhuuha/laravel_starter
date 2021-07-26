<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::get('/', function () {
    return view('layout');
});
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Admin'
    ],
    function () {
        Route::group([
            'prefix' => 'users',
            'as' => 'users.'
        ], function () {
            Route::get('', 'UserController@index')->name('index');
            Route::get('create', 'UserController@create')->name('create');
            Route::post('store', 'UserController@store')->name('store');

            Route::get('{user}', 'UserController@show')->name('show');

            Route::get('edit/{user}', 'UserController@edit')->name('edit');

            Route::post('update/{user}', 'UserController@update')->name('update');

            Route::post('detele/{user}', 'UserController@delete')->name('delete');
        });
    }

);




Route::get('admin/categories', function () {
    $list = DB::table('categories')->get();
    return view('admin/categories/index', ['cate' => $list]);
});

Route::get('admin/products', function () {
    $list = DB::table('products')->get();
    return view('admin/products/index', ['prop' => $list]);
});
