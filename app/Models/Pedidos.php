<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'telefone', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'cep', 'forma_pagamento', 'status', 'valor', 'data_entrega',
    'created_at', 'updated_at'];
}
