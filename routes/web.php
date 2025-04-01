<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Produto\Create as ProdutoCreate;
use Illuminate\Support\Facades\Route;

Route::get('cadastro/cliente', Create::class);

Route::get('/cadastro/produto', ProdutoCreate::class);
