<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    Protected $fillable = [
        'nome','quantidade','preco'

    ];

    Protected $primaryKey = 'idProduto';
}
