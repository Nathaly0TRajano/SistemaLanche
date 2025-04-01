
<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mt-5">
            <h5 class="card-header">Cadastro de Admin</h5>

        <div class="card-body">
            <form class="row g-3" wire:submit.prevent="store">
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputAddress"
                        wire:model.defer="nome">
                        @error('nome') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" wire:model.defer="email">
                    @error('email') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" wire:model.defer="password">
                    @error('password') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="cpf">
                    @error('cpf') <span class="text-warning small">{{ $message }}</span>@enderror

                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                 </div>
            </form>
        </div>
    </div>
</div>
