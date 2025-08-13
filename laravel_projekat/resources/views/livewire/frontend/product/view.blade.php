<div>
<div class="py-3 py-md-5 ">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="bg-white border">
                        <img src="{{asset($product->image)}}" class="w-100" alt="Img" style="width: 100px">
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="product-view">
                        <h2 class="product-name">
                            {{$product->name}}
                        </h3>
                        <hr>
                        <br>
                        <div>
                            <span class="selling-price">Cena: {{ $product->price}} dinara</span>
                        </div><br>
                        @if($product->quantity)
                        <label class="btn-lg py-1 mt-2 text-white bg-success">In Stock</label>
                        @else
                        <label class="btn-lg py-1 mt-2 text-white bg-danger">Out of Stock</label>
                        @endif
                        
                        <div class="mt-2">
                        <div class="input-group">
                            
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus" ></i></span>
                                <input type="text" wire:model="quantityCount" id="quantityCount" value="{{ $this->quantityCount}}" class="input-quantity"  />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                                <!--@csrf-->

                                
                            
                        </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{$product->id}})" class="btn btnfa btn-lg">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                            
                    
                        </div>
                        <!--<div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty
                            </p>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
