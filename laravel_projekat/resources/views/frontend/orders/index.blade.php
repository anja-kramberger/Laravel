@extends('layouts.app')

@section('title', 'My Orders')

@section('content')


    <div class="py-3 pyt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="p-4 shadow bg-white">
                        <h4>My Orders</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered gable-stripped">
                                <thead>
                                    <th>Order ID</th>
                                    <th>Trackin No</th>
                                    <th>Username</th>
                                    <th>Ordered Date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse($orders as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->tracking_no }}</td>
                                            <td>{{ $item->fullname }}</td>
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $item->status_message }}</td>
                                            <td><a href="{{ url('orders/'.$item->id) }}" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No orders available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {{ $orders->links() }}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection