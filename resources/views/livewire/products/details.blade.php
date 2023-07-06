<div>
    <div class="col-12">
        <label class="form-label">Name</label>
        <div class="form-control">{{$product->name}}</div>
    </div>
    <div class="col-12">
        <label class="form-label">Description</label>
        <div class="form-control">{{$product->description}}</div>
    </div>
    <div class="col-12">
        <label class="form-label">Price</label>
        <div class="form-control">{{$product->price}}</div>
    </div>
    <div class="col-12">
        <label class="form-label">Image</label>
        <div>
            <img src="{{ asset('uploads/'.$product->uuid.'/'.$product->image_name) }}" class="rounded" alt="image not found" width="100" height="100">
        </div>
    </div>
    <br>
    <div class="col-12">
        <button wire:click="decrement">-</button>
        <input type="number" name="" value="{{$quantity}}" wire:model="quantity">
        <button wire:click="increment">+</button>
        <button wire:click="addToCart">Add To Cart</button>
    </div>
</div>