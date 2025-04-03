<div class="mt-5">
    <div class="card row col-md-3 p-3 mb-3">
        <a href="">Index de produtos</a>
        <a href="#">Index de Clientes</a>
        <a href="#">Index de Funcionarios</a>
        <a href="#">Index de Admin</a>
    </div>

    <div class="card row col-md-3 p-3 mb-3">
        <a href="{{ route('admin.produto.create') }}">Cadastro de produtos</a>
        <a href="{{ route('funcionario.create') }}">Cadastro de Funcionarios</a>
        <a href="{{ route('admin.create') }}">Cadastro de Admin</a>
    </div>
</div>
