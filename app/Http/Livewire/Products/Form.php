<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Services\ProductService;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $price;
    public $quantity;
    public $image;

    public function render()
    {
        return view('livewire.products.form')
                ->extends('layouts.app')
                ->section('content');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required|integer',
            'image' => 'image|max:1024',
        ]);
        $product = ProductService::store($validatedData['name'],$validatedData['description'],$validatedData['price'],$validatedData['quantity'],$validatedData['image']);
        
        $this->reset();
        session()->flash('message', 'Product successfully saved.');
    }
}
