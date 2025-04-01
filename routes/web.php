<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Funcionario\Create as FuncionarioCreate;
use App\Livewire\Produto\Create as ProdutoCreate;
use Illuminate\Support\Facades\Route;

Route::get('cadastro/cliente', Create::class);

Route::get('funcionario/dashboard/cadastro/produto', ProdutoCreate::class);

Route::get('cadastro/funcionario', FuncionarioCreate::class);
