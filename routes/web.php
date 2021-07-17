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
Route::get('admin/users', function () {
    // $list = DB::table('users')->get();
    $list = User::all();
    return view('admin/users/index', ['users' => $list]);
})->name('admin.users.index');

Route::post('admin/users/store', function () {
    $data = (request()->all());
    $data['password'] = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
    User::create($data);
    return redirect()->route('admin.users.index');
})->name('admin.users.store');

Route::view('admin/users/create', '/admin/users/create')->name('admin.users.create');


Route::get('admin/users/edit/{id}', function ($id) {
    $data = User::find($id);

    return view('admin/users/edit', [
        'data' => $data
    ]);
})->name('admin.users.edit');

Route::post('admin/users/update/{id}', function ($id) {
    $data = request()->all();
    $data = $data['user'];
    $user = User::find($id);
    $user->update($data);
    return redirect()->route('admin.users.index');
})->name('admin.users.update');

Route::post('admin/users/detele/{id}', function ($id) {
    // dd($id);
    $user = User::find($id);
    $user->delete();
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
