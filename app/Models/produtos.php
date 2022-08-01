<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'descricao', 'preco', 'quantidade', 'categoria', 'foto', 'marca', 'modelo', 'cor', 'tamanho', 'peso', 'tipo', 'status', 
    'alterado_por', 'created_at', 'updated_at'];
}
