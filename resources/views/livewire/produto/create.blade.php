<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="card mx-auto">
        <div class="card-body">
            <h5 class="card-header mb-3">Cadastro de Produtos</h5>

            <form class="row g-3" wire:submit.prevent="store">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputAddress" wire:model.defer="nome">
                    @error('nome')<span class="text-warning small">{{ $message }}</span>@enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                    <input type="text" class="form-control"
                        aria-label="Dollar amount (with dot and two decimal places)" wire:model.defer="valor">
                </div>
                @error('valor')<span class="text-warning small">{{ $message }}</span>@enderror

                <div class="mb-3">
                    <label for="input">Descrição</label>
                    <textarea name="ingredientes" id="ingredientes" class="form-control" rows="5" wire:model.defer="ingredientes"></textarea>
                    @error('ingredientes')<span class="text-warning small">{{ $message }}</span>@enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>
