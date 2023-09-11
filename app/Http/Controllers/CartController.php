<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    function index()
    {
        $carts = Cart::get();
        return view('cart.index', compact('carts'));
    }
    function addOrder()
    {
        $user = Auth::user();
        $data = Cart::where('user_id', '=', $user->id)->get();
        $size = count($data);
        // $arr = [];
        $price = 0;
        $quantity = 0;
        $totalPrice = 0;
        for ($i = 0; $i < $size; $i++) {
            $prodata = Product::where('id', '=', $data[$i]->product_id)->get();
            $quantity = $data[$i]->quantity;
            for ($x = 0; $x < count($prodata); $x++) {
                $price += $prodata[$x]->price;

            }
            $totalPrice = $price * $quantity;
        }


        // dd($totalPrice);
        // dd($price * $quantity);
        Order::create([
            "user_id" => $user->id,
            "price" => $totalPrice,
        ]);
        foreach ($data as $d) {
            $cart = Cart::find($d->id);
            $cart->delete();
        }
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $category = Cart::find($id);
        $category->delete();
        return redirect()->route('cart.index');
    }
}