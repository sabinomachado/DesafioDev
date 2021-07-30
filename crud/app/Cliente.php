<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $connection = 'mysql';
    protected $table = 'clientes';
    protected $dates= ['created_at', 'updated_at'];
    protected $primaryKey = 'id';


    public $incrementing = false;

    protected $fillable = [
        'cpf', 'nome','email','rg','email','dt_nascimento','logradouro','numero','complemento','bairro','municipio','uf','cep','telefone','celular','sexo'
    ];


    protected $hidden = [
        'remember_token',
    ];
}
