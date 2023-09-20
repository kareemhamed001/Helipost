@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="content w-100">

        <div class="block-rounded block">
            <div class="block-header block-header-default">
                <h3 class="block-title"> Successful Orders </h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Shipping Cost</td>
                            <td>Total Cost</td>
                            <td>Delivery Date</td>
                            <td>Status</td>
                            <td>Notes</td>
                            <td>Receiver Name</td>
                            <td>Receiver Phone</td>
                            <td>Sender Name</td>
                            <td>Sender Phone</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->shipping_cost}}</td>
                                <td>{{$order->total_cost}}</td>
                                <td>{{$order->delivery_date}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->notes}}</td>
                                <td>{{$order->receiver_name}}</td>
                                <td>{{$order->receiver_phone}}</td>
                                <td>{{$order->user?->name}}</td>
                                <td>{{$order->user?->phone1}}</td>
                            </tr>


                        @endforeach
                        </tbody>

                    </table>
                    {{$orders->links()}}
                </div>
            </div>
        </div>
@endsection
@section('scripts')

@endsection
