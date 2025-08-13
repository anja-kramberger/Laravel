@extends('layouts.admin')

@section('title', 'My Orders')

@section('content')


<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Orders</h3>
            </div>
            <div class="card-body">
                <form method="get" action="">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Filter By Date</label>
                            <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>

                </form>
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
                                            <td><a href="{{ url('admin/orders/'.$item->id) }}" class="btn btn-primary btn-sm">View</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No orders available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection