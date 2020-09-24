<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.products.index', [
            'products' => Product::all(),
        ]);    
    }

    public function create(){
        return view('admin.products.create', [
            'categories' => Category::all(), 
        ]);
    }

    public function store(Request $request){

        


        $data = $request->validate([
            'name' => 'required',
            'description' => '',
            'image' => '',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required'
        ]);

        $product = new Product();

        $product->name = $request['name'];
            $product->image = $request['image'];
            $product->description = $request['description'];
            $product->price = $request['price'];
            $product->quantity = $request['quantity'];
            
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . rand(1000,1000000) . '.' . $extension;
            $filePath = $request->file('image')->storeAs('uploads/products', $filename, 'public');
            $product->image = $filePath;
            $product->save();
            
            $product->categories()->sync($request['catgories']);
       
        

        return view('admin.products.index', [
            'products' => Product::all(),
        ]);  
    }

    public function edit(Product $product){
        // route model binding
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(), 
        ]);
    }

    public function update(Request $request, Product $product){


        // Route Model Binding
        $data = $request->validate([
            'name' => 'required',
            'description' => '',
            'image' => '',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required'
        ]);

            $product->update($data);
        
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . rand(1000,1000000) . '.' . $extension;
            $filePath = $request->file('image')->storeAs('uploads/products', $filename, 'public');
            $product->image = $filePath;
            $product->save();
            return redirect()->route('product.edit',['product'=>$product]);
        

        $product->categories()->sync($request['catgories']);
        return view('admin.products.index', [
            'products' => Product::all(),
        ]); 
    }

    public function show($product){
        return view('admin.products.show',[
            'product' => Product::find($product),
        ]);
    }

    public function destroy($product){
        $item = Product::find($product);
        $item->delete();
        return redirect()->route('product.index');
    }
}
