<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Table extends Component
{   

    public function render()
    {
        $products = Product::get();
        return view('livewire.products.table',['products'=>$products])
                ->extends('layouts.app')
                ->section('content');
    }
}
