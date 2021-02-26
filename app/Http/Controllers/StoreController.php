<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function products(){

        $products = Product::where('state', 'Activo')->where('number', '>', 0)->get();

        return view('store.products', compact('products'));

    }

    public function sellGet($id){

        $product = Product::find($id);

        return view('store.sell', compact('product'));

    }

    public function sellPost(Request $request, $id){

        $number = $request->input('number');

        $product = Product::find($id);

        $diff = $product->number - $number;

        if($diff == 0){

            $product->setState('Inactivo');
            
        }

        $product->setNumber($diff);

        $product->save();

        return redirect()->route('store.products');

    }
}
