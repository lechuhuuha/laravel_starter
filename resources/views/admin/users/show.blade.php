@extends('layout')

@section('contents')
    <div class="row mt-5 mb-5 ">
        <div class="col-12">
            <div class="col-6">
                <label class="col-4" for="">Ho ten</label>
                <label class="col-8" for="">{{ $user->name }}</label>
            </div>
            <div class="col-6">

            </div>
        </div>
        <div>
            <p>Lich su mua hang</p>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <td scope="col">Id</td>
                        <td scope="col">Name</td>
                        <td scope="col">Number</td>
                        <td scope="col">Address</td>
                        <td scope="col">Price</td>
                        <td scope="col">Invoice status</td>
                        <td scope="col">Created at</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->invoices as $item)
                        <tr>
                            <td>
                                {{ $item->id }} </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->number }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->total_price }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->created_at }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
