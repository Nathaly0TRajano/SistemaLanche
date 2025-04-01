<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $email;
    public $cpf;
    public $password;

    protected $rules = [
        'nome' => 'required|max:80|min:3',
        'email' => 'required|email|unique:users',
        'cpf' => 'required|max:11|min:11',
        'endereco'=> 'required|max:10',
        'telefone' => 'required|max:13',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required'=> 'O campo nome é obrigatório',
        'nome.max'=> 'O limite maxímo de caracteres foi atingido',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Formato de email inválido',
        'email.unique' => 'Este endereço de email já está cadastrado',
        'endereco.required'=> 'Este campo é obrigatório',
        'endereco.min'=> 'Este campo precisa ter no mínimo 10 caracteres',
        'cpf.required' => 'O campo CPF é obrigatório',
        'cpf.min' => 'O limite minímo de caracteres foi atingido',
        'cpf.max' => 'O limite maxímo de caracteres foi atingido',
        'telefone.required' => 'O numero de telefone é obrigatório',
        'telefone.max' => 'O máximo de caracteres é 13',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres'
    ];

    public function render()
    {
        return view('livewire.cliente.create');
    }


    public function store(){
        $this->validate();
        $user = User::create([
              'name' => $this->nome, 
              'email' => $this->email, 
              'password' => Hash::make($this->password),
              'role' => 'cliente'
          ]); 
  
          Cliente::create([
              'endereco'=>$this->endereco,
              'telefone'=>$this->telefone,
              'cpf'=>$this->cpf,
              'user_id' => $user->id
          ]);
  
          session()->flash('success', 'Cadastro Realizado');
      }
}
