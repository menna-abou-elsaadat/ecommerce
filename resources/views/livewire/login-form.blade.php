<div id="form_log">
    <div class="d-flex justify-content-center align-items-center">
        <div class="card card2 shadow p-4 p-md-5" style="max-width: 32rem;">
            <form class="row g-2 form_text" wire:submit.prevent="submit">
                <div class="col-12 text-center mb-4">
                    <h1>Login Form</h1>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label" >Email</label>
                        <input type="email" wire:model="email" class="form-control form-control-lg" placeholder="name@example.com">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <div class="form-label">
                            <span class="d-flex justify-content-between align-items-center">Password
                            </span>
                        </div>
                        <input type="password" class="form-control form-control-lg" wire:model="password" placeholder="***************">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                @error('invalid_credentials') <span class="text-danger">{{ $message }}</span> @enderror
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-lg btn-block btn-dark lift text-uppercase" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>