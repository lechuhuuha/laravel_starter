@extends('layout')

@section('contents')

    <form method="POST" action="{{ route('admin.users.store') }}">
        <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        @error('email')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputPassword1">
        </div>
        @error('name')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputPassword1">
        </div>
        @error('address')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 mt-3">
            <label for="">Gender</label>
            <select name="gender" id="">
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>
        </div>
        @error('gender')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 mt-3 ">
            <label for="">Role</label>
            <select name="role" id="">
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </div>
        @error('role')
            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
