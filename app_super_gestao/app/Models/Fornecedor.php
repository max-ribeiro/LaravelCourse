<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    /**
     * Traits, forma de herança horizontal para contornar a 
     * não possibilidade de multiplas heranças(extends) da horientação a objetos
     */
    use HasFactory;
    use SoftDeletes;

    protected $table = 'fornecedores';

    /**
     * Fillable defines wich attributes of class can be edited via Fornecedor::create();
     */
    protected $fillable = ['nome', 'site', 'uf', 'email'];
    
}
