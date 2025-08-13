@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/biljka11.png" class="d-block w-100" alt="..." >
				<div class="carousel-caption d-none d-md-block">
					<h5></h5>
					<p></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/biljka2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5></h5>
					<p></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/biljka3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5></h5>
					<p></p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center mt-4">
					<h3 style="border-bottom: 5px solid chartreuse; ">Dobrodosli u Florapro!</h3>
					<div class="underlinee"></div>
					<h5 class="mb-5">
						Nudimo veliki asortiman biljaka, saksija i ostalih stvari za naše drage kupce.<br>
						Na prvom mestu su nam kvalitet i pristupacne cene nasim kupcima.<br>
						Za vise informacija pogledajte stranu O nama a ukoliko ne nadjete odgovor<br>
						na nedoumice idite na stranu Kontakt i odgovoricemo u najkracem roku!<br>

					</h5>
				</div>
			
			</div>
		</div>
	</div>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Trending products</h4>
					<div class="underline"></div>
				</div>
				@if($trendingProducts)
				<div class="col-md-8 list-inline list-group list-group-horizontal">
					@foreach ($trendingProducts as $productItem)
					<div class="trproduct col-6 col-md-3">
						<div class="product-card">
							<div class="product-card-img">
								<label class="stock bg-danger">New</label>
								<a href="{{url ('/products/'.$productItem->id)}}"><img class="slike" src="{{ asset("$productItem->image")}}" alt="Laptop" ><a>
							</div>
							<div class="product-card-body">
								<p class="product-category">{{ $productItem->category}} </p>
								<h5 class="product-name">
									<a href="{{url ('/products/'.$productItem->id)}}">
										{{ $productItem->name}} 
									</a>

								</h5>
								<div>
									<span class="price">{{ $productItem->price}} </span>
								</div>
								
							</div>
						</div>
					</div>

					@endforeach
					</div>
					@else
					<div class="col-md-12">
						<h6>NO products available</h6>
					</div>
				</div>
				@endif
		</div>
	</div>

@endsection