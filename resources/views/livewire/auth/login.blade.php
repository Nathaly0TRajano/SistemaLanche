<div class="mt-5">

    @if (session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h5 class="align-itens text-center">Login</h5>
        </div>

        <div class="card-body">
            <form class="column" wire:submit.prevent="login">
                <div class="col-md-12 mb-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" wire:model.defer="email">
                    @error('email') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" wire:model.defer="password">
                    @error('password') <span class="text-danger small">{{ $message }}</span>@enderror
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                 </div>
            </form>
        </div>
    </div>
</div>
