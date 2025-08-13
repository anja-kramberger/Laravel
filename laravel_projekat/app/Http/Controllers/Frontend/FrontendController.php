<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Auth;
// use Illuminate\Auth\Middleware;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public $quantityCount=1;
    public $product;
    public $category;


    public function index(){
        $trendingProducts = Product::where('trending', '1')->latest()->take(5)->get();
        return view('frontend.index', compact('trendingProducts'));
    }
    public function onama(){
        return view('frontend.onama');
    }
    public function kontakt(){
        return view('frontend.kontakt');
    }
    public function galerija(){
        return view('frontend.galerija');
    }

    public function products(){ 
        $products = Product::select('*')->get();
        return view('frontend.products', compact('products'));
        
    }
    /*public function categories(){
        //$categories = DB::table('product')->pluck('id');
        $categories = Product::select('category')->get();
        //dd($categories->category);
        //return view('frontend.products', ['categories' => $categories]);
        return view('frontend.products', compact('categories'));
    }*/

    public function decrementQuantity(){
        $this->quantityCount--;
    }
    public function incrementQuantity(){
        $this->quantityCount++;
    }

    public function productView(string $product){
        $product = Product::where('id', $product)->first();
        if($product){
            return view('frontend.view', compact('product'));
        }
        else{
            return redirect()->back();
        }
        
    }

    public function thankyou(){
        return view('frontend.thank-you');
    }

    /*public function addToCart(int $productId){
        if(Auth::check()){
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $productId,
                'quantity' => $this->quantityCount
            ]);
        }
        else{ 
            //dd("Niste logovani");
            dispatchBrowserEvent('message',[
                'text' => 'Please login to continue',
                'type' => 'info',
                'status' => 404
            ]);
        }
    }*/
}
