<?php

use App\Livewire\Admin\Create as AdminCreate;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Create;
use App\Livewire\Funcionario\Create as FuncionarioCreate;
use App\Livewire\Funcionario\Dashboard as FuncionarioDashboard;
use App\Livewire\Produto\Create as ProdutoCreate;
use Illuminate\Support\Facades\Route;

Route::get('cadastro/cliente', Create::class);

Route::get('funcionario/dashboard/cadastro/produto', ProdutoCreate::class)->middleware(['auth', 'role:funcionario']);

Route::get('/funcionario/dashboard', FuncionarioDashboard::class)->middleware(['auth', 'role:funcionario']);

Route::get('admin/dashboard/cadastro/produto', ProdutoCreate::class)->middleware(['auth', 'role:admin']);

Route::get('cadastro/funcionario', FuncionarioCreate::class)->middleware(['auth', 'role:admin']);

Route::get('cadastro/admin', AdminCreate::class)->middleware(['auth', 'role:admin']);

Route::get('admin/dashboard', AdminDashboard::class)->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/', Login::class)->name('login');