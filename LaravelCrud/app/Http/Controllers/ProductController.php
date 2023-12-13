<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(3);
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        //validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes: jpeg,jpg,,png,gif|max:1000'
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        
        return back()->withSuccess('Product Created !!');
    }

    public function edit($id){
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id){
        //validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes: jpeg,jpg,,png,gif|max:1000'
        ]);
        $product = Product::where('id', $id)->first();
        //upload image
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        
        return back()->withSuccess('Product Updated !!');
    }

    public function delete($id){
        $product = Product::where('id', $id)->first();
        $product->delete();

        return back()->withSuccess('Product Deleted !!');
    }
    public function show($id){
        $product = Product::where('id', $id)->first();
        return view('products.show', ['product' => $product]);
    }
}
