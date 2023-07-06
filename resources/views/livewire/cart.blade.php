<div class="row g-3">
    @if($cart)
    @foreach($cart->products as $cart_product)
    <div class="col_3">
        <div class="card">
            <div class="card-body">
                <p class="">Name: {{$cart_product->product->name}}</p>
                <p class="">Price: {{$cart_product->product->price}}</p>
                <img src="{{ asset('uploads/'.$cart_product->product->uuid.'/'.$cart_product->product->image_name) }}" class="rounded" alt="image not found" width="100" height="100">
                <div>
                    
                    Quantity:<button wire:click="decrement({{$cart_product->id}})">-</button> {{$cart_product->quantity}}
                    <button wire:click="increment({{$cart_product->id}})">+</button>
                </div>
                Total Price = {{$cart_product->quantity * $cart_product->product->price}}
            </div>
            <button wire:click="removeCardProduct({{$cart_product->id}})" class="btn btn-danger">Remove</button>
        </div>
    </div>
    @endforeach
    @endif
</div>