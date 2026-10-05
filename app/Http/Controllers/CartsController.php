<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\carts;

class CartsController extends Controller
{
    public function store(Request $request)
    {
        $user_id = Auth::id();
        if (!Auth::check()) {
            $user_id = $request->input('user_id');
        }
        $cart = carts::create([
            'product_id' => $request->product_id,
            'user_id' => $user_id,
            'quantity' => $request->quantity ? $request->quantity : 1,
        ]);

        return response()->json($cart);
    }
    public function delete(Request $request)
    {
        $cart = carts::where('user_id', $request->user_id)->where('product_id', $request->product_id)->where('order_id', null)->first();
        $data = $cart;
        if ($cart) {
            $cart->delete();
        }
        return response()->json($data);
    }
    public function update(Request $request)
    {

        $user_id = $request->input('user_id');
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        $cart = carts::where(['product_id' => $request->product_id, 'user_id' => $user_id, 'order_id' => null])->first();
        $cart->quantity = $request->quantity ? $request->quantity : 1;
        $cart->save();
        return response()->json($cart);
    }
}
