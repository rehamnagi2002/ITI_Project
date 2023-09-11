<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }
    function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'images/' . $product->image;
        if (File::exists($destination)) {

            File::delete($destination);
        }
        $product->delete();
        return redirect()->route('category.index');
    }

    function update($id)
    {
        $product = Product::find($id);
        return view('product.update', compact('product'));
    }

    function edit($id, Request $request)
    {
        $product = Product::find($id);
        //$user = $request->user();
        $imageName = $product->image;
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

        }
        $product->update([
            "name" => $request->name,
            "price" => $request->price,
            "availability" => $request->availability,
            "category_id" => $request->category_id,
            "image" => $imageName,
        ]);
        //$product->update($request->except('_method', '_token'));
        return redirect()->route('category.index');
    }

    function create()
    {
        return view('product.create');
    }

    function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Product::create($request->all());
        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "availability" => $request->availability,
            "category_id" => $request->category_id,
            "image" => $imageName,
        ]);

        return redirect()->route('category.index');

    }
    function to_cart($id, Request $request)
    {
        $user = Auth::user();
        $product = Product::find($id);
        Cart::create([
            "quantity" => $request->quantity,
            "product_id" => $product->id,
            "user_id" => $user->id,
        ]);
        return redirect()->back();
    }
    function search(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'like', "%$search%")->get();
        return view('product.index', compact('products', 'search'));
    }

}