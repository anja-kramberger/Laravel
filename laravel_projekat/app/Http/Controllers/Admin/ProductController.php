<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('admin.product.index');
        //$data = Product::latest()->paginate(5);
        //return view('admin.product.index', compact('data'))->with('i', (request()->input('page', 1)-1)*5);
        //return 'product';
    }

    
    public function create()
    {
        return view('admin.product.create');
    }

    
    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();
        /*$request->validate([
            'name'          => 'required',
            'price'          => 'required',
            'image'          => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100, min_height=100,max_width=1000, max_height=1000'
        ]);*/
        //$file_name = time() . "." . request()->image->getCLientOriginalExtension();
        //request()->image->move(public_path('images'), $file_name);

        $product = new Product;

        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->category = $validatedData['category'];
        $product->quantity = $validatedData['quantity'];
        $product->trending = $request->trending == true ? '1':'0';

        $uploadedPath = 'uploads/product/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            //$file_name = time() . "." .$ext;
            $filename = time() . '.' .$ext;
            $file->move('uploads/product/', $filename);
            $product->image = $uploadedPath.$filename;
            //$product->image = $file_name;
           // $product->image = $validatedData['image'];

        }
        //$product->image = $validatedData['image'];

        /*$product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->image = $file_name;*/

        $product->save();
        return redirect('admin/product')->with('message', "Product Added Successfully");
    }
    

   
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        //return $product;
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $product)
    {
        $validatedData = $request->validated();

        $product = Product::findOrFail($product);

        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->category = $validatedData['category'];
        $product->quantity = $validatedData['quantity'];
        $product->trending = $request->trending == true ? '1':'0';

        if ($request->hasFile('image')) {
            $uploadedPath = 'uploads/product/';

            $path = 'uploads/product/'.$product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . "." .$ext;
            $file->move('uploads/product/', $filename);
            $product->image = $uploadedPath.$filename;

        }
        $product->update();
        return redirect('admin/product')->with('message', "Product Updated Successfully");


    }

    
    public function destroy(Product $product)
    {
        //dd($product->id);
        $product->delete();
        return redirect('admin/product')->with('message', "Product Deleted Successfully");
    }
}
