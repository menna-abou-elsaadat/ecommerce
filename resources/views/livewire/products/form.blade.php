<form class="row g-2" wire:submit.prevent="submit">
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="col-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="name" wire:model.defer="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" placeholder="" wire:model.defer="description">
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" placeholder="" wire:model.defer="price" >
        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control" placeholder="" wire:model.defer="quantity">
        @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Image</label>
        <input type="file" wire:model="image">
        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>