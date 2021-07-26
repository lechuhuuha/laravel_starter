<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $list = User::paginate(4);
        // dd($list);
        return view('admin/users/index', ['users' => $list]);
    }
    public function show(User $user)
    {
        return view('admin/users/show', ['user' => $user]);
    }
    public function create()
    {
        return view('admin/users/create');
    }
    public function store(StoreRequest $request)
    {
        $data = ($request->all());
        User::create($data);
        return redirect()->route('admin.users.index');
    }
    public function edit(User $user)
    {
        return view('admin/users/edit', [
            'data' => $user
        ]);
    }
    public function update(User $user)
    {
        $data = request()->all();
        $data = $data['user'];
        $user->update($data);
        return redirect()->route('admin.users.index');
    }
    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
