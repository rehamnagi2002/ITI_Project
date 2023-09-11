<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }
    function indexU()
    {
        $categories = Category::get();
        return view('category.indexU', compact('categories'));
    }
    function search(Request $request)
    {
        $search = $request->search;
        $categories = Category::where('name', 'like', "%$search%")->get();
        return view('category.index', compact('categories', 'search'));
    }
    function show($id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }
    function showU($id)
    {
        $category = Category::find($id);
        return view('category.showU', compact('category'));
    }
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }

    function create()
    {
        return view('category.create');
    }
    function store(Request $request)
    {

        Category::create([
            "name" => $request->name,
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
}