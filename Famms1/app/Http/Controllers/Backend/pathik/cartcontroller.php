<?php

namespace App\Http\Controllers\Backend\pathik;

use App\Http\Controllers\Controller;
use App\Models\cart;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function cartList()
    {
        $cartItems = cart::all();
        // dd($cartItems);
        return view('Frontend.cart.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        cart::add([
            'id' => $request->id,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('Frontend.home.home');
    }
    // public function updateCart(Request $request)
    // {
    //     cart::update(
    //         $request->id,
    //         [
    //             'quantity' => [
    //                 'relative' => false,
    //                 'value' => $request->quantity
    //             ],
    //         ]
    //     );

    //     session()->flash('success', 'Item Cart is Updated Successfully !');

    //     return redirect()->route('cart.list');
    // }

    public function removeCart(Request $request)
    {
        cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('Frontend.home.home');
    }

    public function clearAllCart()
    {
        cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('Frontend.home.home');
    }
}
