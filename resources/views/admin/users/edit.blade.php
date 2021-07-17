@extends('layout')

@section('contents')

    <form method="POST" action="{{ route('admin.users.update', $data->id) }}">
        <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="{{ $data->email }}" name="user[email]" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="name" value="{{ $data->name }}" name="user[name]" class="form-control"
                id="exampleInputPassword1">
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" value="{{ $data->address }}" name="user[address]" class="form-control"
                id="exampleInputPassword1">
        </div>
        <div class="mb-3 mt-3">
            <label for="">Gender</label>
            <select name="user[gender]" id="">
                <option value="1" {{ $data->gender == 1 ? 'selected' : '' }}>Male</option>
                <option value="0" {{ $data->gender == 0 ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="mb-3 mt-3 form-check">
            <input type="checkbox" name="user[admin]" {{ $data->gender == 1 ? 'checked' : '' }} class="form-check-input"
                id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Admin or not</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
