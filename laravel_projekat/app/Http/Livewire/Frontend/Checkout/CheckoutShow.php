<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Support\Str;
use Livewire\Component;


class CheckoutShow extends Component
{
    public $carts, $totalProductAmount = 0;
    public $fullname, $email, $phone, $address;

    public function rules()
    {
        return[
            'fullname' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'phone' => 'required|string|max:11|min:10',
            'address' => 'required|string|max:500',
        ];
    }

    public function placeOrder(){

        //$validatedData = $this->validate();
        $this->validate();
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' => 'florapro-'.Str::random(10),
            'fullname' =>$this->fullname,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'status_message' => 'Completed'
        ]);
        foreach($this->carts as $cartItem){
            $orderItems = Orderitem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price'  => $cartItem->product->price
            ]);
            $cartItem->product()->where('id', $cartItem->product_id)->decrement('quantity', $cartItem->quantity);
        }
        return $order;
        
    }

    public function codOrder(){
        $codOrder = $this->placeOrder();
        if($codOrder){
            Cart::where('user_id', auth()->user()->id)->delete();
            session()->flash('message', 'Placed Order Successfully');
            return redirect()->to('thank-you');
        }
            
        else{

        }
    }

    public function totalProductAmount()
    {
        $this->totalProductAmount = 0;
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();
        foreach($this->carts as $cartItem){
            $this->totalProductAmount += $cartItem->product->price * $cartItem->quantity;
        }
        return $this->totalProductAmount;
    }
    public function render()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->totalProductAmount = $this->totalProductAmount();
        return view('livewire.frontend.checkout.checkout-show',[
            'totalProductAmount' => $this->totalProductAmount
        ]);
    }
}
