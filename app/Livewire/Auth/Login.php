<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password; 

    protected $rules = [
        'email'=> 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'email é obrigatório',
        'email.email' => 'formato de email inválido',
        'password.required'=> 'senha é obrigatória',
        'password.min' => 'senha deve conter no mínimo 6 caracteres'
    ];
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){

        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');  //: = se não   
            }

            if (Auth::user()->role === 'funcionario') {

                return redirect()->route('funcionario.dashboard');  //: = se não   
            }

            if (Auth::user()->role === 'cliente') {

                return redirect()->route('cliente.dashboard');  //: = se não   
            } 
        }
        session()->flash('error', 'Email ou senha incorretos');
    }
}
