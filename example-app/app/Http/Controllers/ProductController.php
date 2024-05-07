<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //

    public function index(){

        if (Auth::check()) {
            $user = Auth::user(); // Get the authenticated user
            $products = Product::all();
            return view('products.index', ['products' => $products, 'user' => $user]);
        }
        return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
    }

    public function edit(Product $product){
            $user = Auth::user();
        return view('products.edit', ['product' => $product, 'user' => $user]);
    }

    public function  destroy(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product deleted successfully');
    }
    public function update(Product $product, Request  $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=> 'nullable',
        ]);

        $product -> update($data);

        return redirect(route('product.index'))->with('success', 'Product  updated successfully');
    }
    public function create(){

        if (Auth::check()) {
            $user = Auth::user();
         return view('products.create', ['user' => $user]);
        }else
        {
            return redirect(route('login'))->withErrors('Vous n\'etes pas autorisé à accéder');
        }
        }

    public function store(Request $request){
        // dd($request);

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=> 'nullable',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
}
