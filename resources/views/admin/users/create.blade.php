@extends('layout')

@section('contents')

    <form method="POST" action="{{ route('admin.users.store') }}">
        <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="user[email]" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="name" name="user[name]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="user[address]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 mt-3">
            <label for="">Gender</label>
            <select name="user[gender]" id="">
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>
        </div>
        <div class="mb-3 mt-3 form-check">
            <input type="checkbox" name="user[admin]" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Admin or not</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
