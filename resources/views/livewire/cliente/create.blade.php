<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5>Cadastro de Clientes</h5>
        </div>

        <div class="card-body">
            <form class="row g-3" wire:submit.prevent="store">
                <div class="col-12">
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
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        wire:model.defer="endereco">
                        @error('endereco') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="telefone">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="cpf">
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                 </div>
            </form>
        </div>
    </div>
</div>
