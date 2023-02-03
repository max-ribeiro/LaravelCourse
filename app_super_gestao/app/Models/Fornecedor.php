<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    /**
     * Fillable defines wich attributes of class can be edited via Fornecedor::create();
     */
    protected $fillable = ['nome', 'site', 'uf', 'email'];
    use HasFactory;
}
