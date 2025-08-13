<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;


class CartShow extends Component
{
    public $cart, $totalPrice=0;
    

    public function decrementQuantity(int $cartId){
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData->product->quantity > $cartData->quantity)
            {
                if($cartData->quantity > 0){
                    $cartData->decrement('quantity');
                }
                
            }
            else{
                //
            }
    }
    public function incrementQuantity(int $cartId){
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->product->quantity > $cartData->quantity)
            {
                $cartData->increment('quantity');
            }
            else{
                //
            }
        }
    }

    public function removeCartItem(int $cartId)
    {
        Cart::where('user_id', auth()->user()->id)->where('id', $cartId)->delete();
        //$cartRemoveData = Cart::where('user_id', auth()->user()->id)->where('id', $cartId)->first();
        
    }

    public function render()
    {
        $this->cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show', [
            'cart' => $this->cart
        ]);
    }
}
