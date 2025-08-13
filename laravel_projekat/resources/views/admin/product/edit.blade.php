@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-md-12 grid-margin">
		<div class="card">
			<div class="card-header">
				<h3>Edit Product
					<a href="{{ url('admin/product')}}" class="btn btn-danger float-end">BACK</a>
				</h3>
			</div>
			<div class="card-body">
				<form action="{{ url('admin/product/'. $product->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="mb-3">
						<label>Name</label>
						<input type="text" name="name" value="{{ $product->name }}" class="form-control"/>
						@error('name')<small class="text-danger">{{$message}}</small>@enderror
					</div>
					<div class="mb-3">
						<label>Price</label>
						<input type="text" name="price" value="{{ $product->price }}" class="form-control"/>
						@error('price')<small class="text-danger">{{$message}}</small>@enderror
					</div>
					<div class="mb-3">
						<label>Description</label>
						<textarea name="description" rows="3" class="form-control">{{ $product->description }}</textarea>
						@error('description')<small class="text-danger">{{$message}}</small>@enderror
					</div>
					<div class="mb-3">
						<label>Category</label>
						<select name="category" class="form-control">
							<option value="Biljka"<?php if( $product->category == "Biljka"){ print ' selected';} ?>>Biljka</option>
							<option value="Saksija" <?php if( $product->category == "Saksija"){ print ' selected';} ?>>Saksija</option>
							<option value="Ostalo" <?php if( $product->category == "Ostalo"){ print ' selected';} ?>>Ostalo</option>
						</select>
					</div>
					<div class="mb-3">
							<label>Quantity</label>
							<input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control"/>
							@error('quantity')<small class="text-danger">{{$message}}</small>@enderror
						</div>
						<div class="mb-3">
							<label>Trending</label>
							<input type="checkbox" name="trending" {{ ($product->trending  == '1' ? 'checked': '')}} class="form-control"/>
							@error('trending')<small class="text-danger">{{$message}}</small>@enderror
						</div>
					<div class="mb-3">
						<label>Image</label>
						<input  type="file" name="image" class="form-control"/><br>
						<img src="{{ asset($product->image)}}" width="150px" height="150px" >
						
					</div>
					<div class="text-center">
						<input type="submit" class="btn btn-danger" value="Update" />
					</div>

				</form>
			</div>
			
		</div>
	</div>
</div>

@endsection