@extends('layouts.app')

@section('title', 'My Order Details')

@section('content')

    <div class="py-3 pyt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="p-4 shadow bg-white">
                        <h4>
                            <i class="fa fa-shopping cart"></i> My Order Details
                            <a href="{{ url('orders')}}" class="btn btn-danger btn-sm float-end">Back</a>
                        </h4>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <hr>
                                <h6>Order Id: {{ $order->id }}</h6>
                                <h6>Tracking Id/No.: {{ $order->tracking_no }}</h6>
                                <h6>Order Date: {{ $order->created_at->format('d-m-Y:i A') }}</h6>
                                <h6 class="border p-2 text-success">
                                    Order Status Message: <span class="text-uppercase">{{ $order->status_message}}</span>
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <h5>User Details</h5>
                                <hr>
                                <h6>Full Name: {{ $order->fullname }}</h6>
                                <h6>Email: {{ $order->email }}</h6>
                                <h6>Phone: {{ $order->phone }}</h6>
                                <h6>Address: {{ $order->address }}</h6>
                            </div>
                        </div>
                        <br/>
                        <h5>Order Items</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripped">
                                <thead>
                                    <th>Item ID</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPrice=0;
                                    @endphp
                                    @foreach($order->orderItems as $orderItem)
                                        <tr>
                                            <td>{{ $orderItem->id }}</td>
                                            <td>{{ $orderItem->product->name }}</td>
                                            <td>{{ $orderItem->price }}</td>
                                            <td>{{ $orderItem->quantity }}</td>
                                            <td class="fw-bold">{{ $orderItem->quantity * $orderItem->price }}</td>
                                            @php
                                                $totalPrice += $orderItem->quantity * $orderItem->price;
                                            @endphp
                                        </tr>
                                    
                                    @endforeach
                                    <tr>
                                        <td colspan="4" class="fw-bold">Total Amount:</td>
                                        <td  class="fw-bold">{{ $totalPrice }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection