<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroDeClientes extends Model
{
    protected $table = 'cadastro_de_clientes';

    protected $fillable = [
        "id",
        "nome",
        "endereco",
        "bairro",
        "municipio",
        "estado",
        "cep",
        "telefone"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
