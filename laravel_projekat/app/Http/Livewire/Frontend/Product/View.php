<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class View extends Component
{
    public $product;
    public $quantityCount=1;

    public function decrementQuantity(){
        if($this->quantityCount > 0){
            $this->quantityCount--;
        }
    }
    public function incrementQuantity(){
        $this->quantityCount++;
    }
    public function addToCart(int $productId){
        if(Auth::check()){
            //dd($productId);
            if($this->product->where('id', $productId)->exists()){
                //dd('am product');
                if(Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists())
                {
                    session()->flash('message' , 'Proizvod je vec ubacen u korpu');
                    return false;
                }
                else{

                
                    if($this->product->quantity > 0)
                    {
                        if($this->product->quantity >= $this->quantityCount){
                            //Insert Product to Cart
                            //dd('am add without');
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);
                            $this->emit('CartAddedUpdated');
                            session()->flash('message' , 'Proizvod je u dodat');
                        }
                        else{
                            session()->flash('message' , 'Nema proizvoda na stanju');
                            return false;
                            }
                    }
                    else
                    {
                        session()->flash('message' , 'Nema proizvoda na stanju');
                        return false;
                    }
                }
                
            }
            else{
                session()->flash('message' , 'Ne postoji proizvod');
                return false;
                
            }
        }
        else{
            session()->flash('message' , 'Ulogujte se da biste nastavili sa kupovinom');
            return false;

        }
    }
    public function mount($product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view', [
            'product' => $this->product
        ]);
    }
}
