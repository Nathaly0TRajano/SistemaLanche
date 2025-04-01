<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'endereco',
        'telefone',
        'cpf',
        'user_id'
    ];

    public function user(){
       return $this->belongTo(User::class);
    }
}
