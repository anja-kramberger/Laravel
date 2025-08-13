<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    /*public $product_id;

    public function deleteProduct($product_id){
        //dd($product_id);
        $this->product_id = $product_id;
    }
    
    public function destroyProduct(){
        $product = Product::find($this->product_id);
        $path = 'uploads/product/'.$product->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $product->delete();
        session()->flash('message', 'Product deleted');
    }*/

    public function render()
    {

        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.product.index', ['products' => $products]);
    }
}
