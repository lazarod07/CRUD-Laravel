<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){

        $products = Product::all();

        return view('product.list', compact('products'));

    }

    public function addGet(){

        $categories = Category::all();

        return view('product.add', compact('categories'));

    }

    public function addPost(Request $request){
        
        $name = $request->input('name');

        $state = $request->input('state');

        $value = $request->input('value');

        $number = $request->input('number');

        $id_category = $request->input('category');

        $product = new Product();

        $product->setName($name);

        $product->setState($state);

        $product->setValue($value);

        $product->setNumber($number);

        $product->setCategory_id($id_category);

        $product->save();

        return redirect()->route('product.list');

    }

    public function editGet(Request $request, $id){

        $categories = Category::all();

        $product = Product::find($id);

        return view('product.edit', compact('categories', 'product'));

    }

    public function editPost(Request $request, $id){

        $name = $request->input('name');

        $state = $request->input('state');

        $value = $request->input('value');

        $number = $request->input('number');

        $id_category = $request->input('category');

        $product = Product::find($id);

        $product->setName($name);

        $product->setState($state);

        $product->setValue($value);

        $product->setNumber($number);

        $product->setCategory_id($id_category);

        $product->save();

        return redirect()->route('product.list');

    }

    public function delete($id){

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('product.list');

    }

}
