<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $password;
    public $cpf;

    protected $rules = [
        'nome' => 'required|max:80|min:3',
        'email' => 'required|email|unique:users',
        'cpf' => 'required|max:11|min:11|unique:funcionarios',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required'=> 'O campo nome é obrigatório',
        'nome.max'=> 'O limite maxímo de caracteres foi atingido',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Formato de email inválido',
        'email.unique' => 'Este endereço de email já está cadastrado',
        'cpf.required' => 'O campo CPF é obrigatório',
        'cpf.min' => 'O limite minímo de caracteres foi atingido',
        'cpf.max' => 'O limite maxímo de caracteres foi atingido',
        'cpf.unique' => 'Este cpf já existe',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres'
    ];

    public function render()
    {
        return view('livewire.funcionario.create');
    }

    public function store(){

        $this->validate();

        $user = User::create([
            'name'=>$this->nome,
            'email' => $this->email, 
              'password' => Hash::make($this->password),
              'role' => 'funcionario'
        ]);

        Funcionario::create([
            'cpf'=>$this->cpf,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
