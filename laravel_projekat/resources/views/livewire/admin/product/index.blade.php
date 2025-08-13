
<div class="row">
    <div class="col-md-12 grid-margin">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Product
                    <a href="{{ url('admin/product/create') }}" class="btn btn-danger float-right">Add Product</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <!--<th>Image</th>-->
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th class="desc">Description</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <!--<td><img src="{{ asset($product->image)}}" width="175px" height="175px"></td>-->
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td class="desc">{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <form action="{{ url('admin/product', $product->id) }}" method="POST" >

                                    <a href="{{ url('admin/product/'.$product->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $products->links()}}
                </div>

            </div>
        </div>
    </div>
</div>
