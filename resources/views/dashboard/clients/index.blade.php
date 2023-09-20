@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="content w-100">

        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <h3 class="block-title">clients </h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Phone 1</td>
                            <td>Phone 2</td>
                            <td>Address</td>
                            <td>Notes</td>
                            <td>City</td>
                            <td>Province</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->phone1}}</td>
                                <td>{{$client->phone2}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->notes}}</td>
                                <td>{{$client->city}}</td>
                                <td>{{$client->province}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$clients->links()}}
                </div>
            </div>
        </div>
@endsection
@section('scripts')

@endsection
