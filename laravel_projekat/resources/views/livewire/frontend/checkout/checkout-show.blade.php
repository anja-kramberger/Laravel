<div>
    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>

            @if($this->totalProductAmount != '0')
            <div class="row">
                
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>

                        
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" wire:model.defer="fullname" class="form-control" placeholder="Enter Full Name" />
                                    @error('fullname') <small class="text-danger">{{ $message}}</small> @enderror
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label>Phone Number</label>
                                    <input type="number" wire:model.defer="phone" class="form-control" placeholder="Enter Phone Number" />
                                    @error('phone') <small class="text-danger">{{ $message}}</small> @enderror
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" wire:model.defer="email" class="form-control" placeholder="Enter Email Address" />
                                    @error('email') <small class="text-danger">{{ $message}}</small> @enderror
                                </div>
                                <!--<div class="col-md-6 mb-3">
                                    <label>Pin-code (Zip-code)</label>
                                    <input type="number" name="pincode" class="form-control" placeholder="Enter Pin-code" />
                                </div>-->
                                <div class="col-md-12 mb-3">
                                    <label>Full Address</label>
                                    <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                    @error('address') <small class="text-danger">{{ $message}}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div >
                                        <h4 class="text-primary">
                                            Item Total Amount : {{$this->totalProductAmount}}
                                            
                                        </h4>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="button" wire:loading.attr="disabled" wire:click="codOrder" class="btn btn-primary">
                                        <span wire:loading.remove wire:target="codOrder">
                                            Place Order
                                        </span>
                                        <span wire:loading wire:target="codOrder">
                                            Placing Order
                                        </span>
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
            @else
            <div class="card card-body shadow text-center p-md-5">
                <h4>No items in cart to checkout</h4>
                <a href="{{ url('products')}}" class="btn btn-warning">Shop now</a>
            </div>
            @endif
        </div>
    </div>

</div>
