<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;

    protected $rules = [
        'nome' => 'required|min:3',
        'ingredientes' => 'required|min:7',
        'valor'=> 'required|decimal:2'
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.min' => 'O campo precisa ter no mínimo 3 caracterers',
        'ingredientes.required' => 'O campo é obrigatório',
        'ingredientes.min' => 'O campo precisa ter no mínimo 7 caracteres',
        'valor.required' => 'O campo é obrigatório',
        'valor.decimal' => 'O campo precisa ter dois carateres depois do ponto'
        
    ];

    public function render()
    {
        return view('livewire.produto.create');
    }

    public function store(){
        $this->validate();
        
        Produto::create([
            'nome'=> $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor
        ]);


        session()->flash('success', 'Cadastro Realizado');
     }
}
