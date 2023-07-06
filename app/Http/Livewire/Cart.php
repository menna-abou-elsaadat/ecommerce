<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Services\CartService;
use App\Models\CartProduct;

class Cart extends Component
{
    public function render()
    {
        $cart = Auth::user()->CurrentCart()->first();
        return view('livewire.cart',['cart'=>$cart])
                ->extends('layouts.app')
                ->section('content');
    }

    public function increment($cart_product_id)
    {   
        $cart_product = CartProduct::find($cart_product_id);
        $quantity = $cart_product->quantity + 1;
        CartService::updateCartProduct($cart_product,$quantity);
    }

    public function decrement($cart_product_id)
    {
        $cart_product = CartProduct::find($cart_product_id);
        $quantity = $cart_product->quantity - 1;
        CartService::updateCartProduct($cart_product,$quantity);
    }

    public function removeCardProduct($cart_product_id)
    {
        $cart_product = CartProduct::find($cart_product_id)->delete();
    }
}
