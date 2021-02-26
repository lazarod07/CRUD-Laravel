<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function list(){

        $categories = Category::all();

        return view('category.list', compact('categories'));

    }

    public function addGet(){

        return view('category.add');

    }

    public function addPost(Request $request){

        $name = $request->input('name');
        
        $description = $request->input('description');

        $category = new Category();

        $category->setName($name);

        $category->setDescription($description);

        $category->save();

        return redirect()->route('category.list');

    }

    public function editGet($id){

        $category = Category::find($id);
        
        return view('category.edit', compact('category'));

    }

    public function editPost(Request $request, $id){

        $name = $request->input('name');

        $description = $request->input('description');

        $category = Category::find($id);

        $category->setName($name);

        $category->setDescription($description);

        $category->save();
        
        return redirect()->route('category.list');

    }

    public function delete($id){

        $category = Category::find($id);

        $category->delete();

        return redirect()->route('category.list');

    }

    public function products($id){

        $category = Category::find($id);

        $products = $category->products()->get();

        return view('category.products', compact('products', 'id'));
        
    }

    public function addProductGet($id){

        return View('category.addProduct', compact('id'));

    }

    public function addProductPost(Request $request, $id){

        $name = $request->input('name');

        $state = $request->input('state');

        $value = $request->input('value');

        $number = $request->input('number');

        $product = new Product();

        $product->setName($name);

        $product->setState($state);

        $product->setValue($value);

        $product->setNumber($number);

        $product->setCategory_id($id);

        $product->save();

        return redirect()->route('category.products', ['id' => $id]);

    }

    public function editProductGet($idCategory, $idProduct){

        $product = Product::find($idProduct);

        return view('category.editProduct', compact('product', 'idCategory'));

    }

    public function editProductPost(Request $request, $idCategory, $idProduct){
        
        $name = $request->input('name');

        $state = $request->input('state');

        $value = $request->input('value');

        $number = $request->input('number');

        $product = Product::find($idProduct);

        $product->setName($name);

        $product->setState($state);

        $product->setValue($value);

        $product->setNumber($number);

        $product->save();
        
        return redirect()->route('category.products', ['id' => $idCategory]);

    }

    public function deleteProduct( $idCategory, $idProduct){

        $product = Product::find($idProduct);

        $product->delete();

        return redirect()->route('category.products', ['id' => $idCategory]);

    }
}
