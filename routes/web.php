<?php

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
Route::get('admin/users', function () {
    $list = DB::table('users')->get();
    return view('admin/users/index', ['users' => $list]);
})->name('admin.users.index');

Route::post('admin/users', function () {
    // dd($_REQUEST);
    return redirect()->route('admin.users.index');
})->name('admin.users.store');

Route::view('admin/users/create', '/admin/users/create')->name('admin.users.create');


Route::get('admin/users/edit/{id}', function ($id) {
    $data = DB::table('users')->find($id);

    return view('admin/users/edit', [
        'data' => $data
    ]);
})->name('admin.users.edit');

Route::post('admin/users/update/{id}', function ($id) {
    return redirect()->route('admin.users.index');
})->name('admin.users.update');

Route::delete('admin/users/detele/{id}', function ($id) {
    return redirect()->route('admin.users.index');
})->name('admin.users.delete');




Route::get('admin/categories', function () {
    $list = DB::table('categories')->get();
    return view('admin/categories/index', ['cate' => $list]);
});

Route::get('admin/products', function () {
    $list = DB::table('products')->get();
    return view('admin/products/index', ['prop' => $list]);
});
