<form class="row g-2" wire:submit.prevent="submit">
    <div class="col-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="name" wire:model.defer="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="example@gmail.com" wire:model.defer="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" placeholder="" wire:model.defer="password">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>