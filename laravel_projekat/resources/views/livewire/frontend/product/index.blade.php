<div class="kontent">
    <div class="row">
        <div class="col-md-3">
            <!--<div class="card">
                    <div class="card-header"><h4>Kategorije</h4></div>
                    <div class="card-body">
                    
                </div>
            </div>-->
            <div class="card">
                <div class="card-header"><h4>Price</h4></div>
                <div class="card-body">                
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" /> High to Low
                    </label>
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" /> Low to High
                    </label>
                </div>
            </div>


        </div>

        <div class="col-md-9">
        <div class="row">
        @forelse ($products as $productItem)
        <div class="col-6 col-md-3">
            <div class="product-card">
                <div class="product-card-img">
                    <img class="slike" src="{{ asset("$productItem->image")}}" alt="Laptop" >
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
        @empty
        <div class="col-md-12">
            <h6>NO products available</h6>
        </div>
        @endforelse

        </div>
    
    </div>   
</div> 