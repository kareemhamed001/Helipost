@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="content w-100">

        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <h3 class="block-title">drivers </h3>
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
                            <td>Vehicle Brand</td>
                            <td>Vehicle Model</td>
                            <td>Vehicle Year Model</td>
                            <td>Vehicle Licence Plate</td>
                            <td>Vehicle Color</td>
                            <td>Vehicle Image</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($drivers as $driver)
                            <tr>
                                <td>{{$driver->id}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->phone1}}</td>
                                <td>{{$driver->phone2}}</td>
                                <td>{{$driver->address}}</td>
                                <td>{{$driver->notes}}</td>
                                <td>{{$driver->city}}</td>
                                <td>{{$driver->province}}</td>
                                <td>{{$driver->vehicles?->first()?->brand}}</td>
                                <td>{{$driver->vehicles?->first()?->model}}</td>
                                <td>{{$driver->vehicles?->first()?->year_model}}</td>
                                <td>{{$driver->vehicles?->first()?->licence_plate}}</td>
                                <td>{{$driver->vehicles?->first()?->color}}</td>
                                <td><img src="{{asset('storage/'.$driver->vehicle_image)}}" alt="" width="100px"></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$drivers->links()}}
                </div>
            </div>
        </div>
@endsection
@section('scripts')

@endsection
