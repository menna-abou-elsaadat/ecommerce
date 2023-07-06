<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Services\CartService;
use Auth;

class Details extends Component
{
    public $product_id;
    public $product;
    public $quantity = 1 ;

    public function render()
    {
        return view('livewire.products.details')
                ->extends('layouts.app')
                ->section('content');
    }

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->product = Product::find($product_id);
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
        
    }

    public function addToCart()
    {
        $cart_product = CartService::addProduct($this->product,$this->quantity,Auth::user());
        session()->flash('message', 'cart contains '.$cart_product->quantity.' of this Product.');
    }
}
