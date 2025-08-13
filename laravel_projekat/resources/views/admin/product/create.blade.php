@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 grid-margin">
		<div class="card">
			<div class="card-header">
				<h3>Add Product
					<a href="{{ url('admin/product')}}" class="btn btn-danger float-right">BACK</a>
				</h3>
			</div>
			<div class="card-body">
				<form action="{{ url('admin/product')}}" method="POST" enctype="multipart/form-data">
					@csrf

					
						<div class="mb-3">
							<label>Name</label>
							<input type="text" name="name" class="form-control"/>
							@error('name')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Price</label>
							<input type="text" name="price" class="form-control"/>
							@error('price')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Description</label>
							<textarea name="description" rows="3" class="form-control"></textarea>
							@error('description')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Category</label>
							<select name="category" class="form-control">
								<option value="Biljka">Biljka</option>
								<option value="Saksija">Saksija</option>
								<option value="Ostalo">Ostalo</option>
							</select>
						</div>
						<div class="mb-3">
							<label>Quantity</label>
							<input type="text" name="quantity" class="form-control"/>
							@error('quantity')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Trending</label>
							<input type="checkbox" name="trending" class="form-control"/>
							@error('trending')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Image</label>
							<input type="file" name="image" class="form-control"/>
							@error('image')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="text-center">
							<input type="submit" class="btn btn-success" value="Add" />
						</div>
					

				</form>
			</div>
			
		</div>
	</div>
</div>

@endsection