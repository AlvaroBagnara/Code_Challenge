<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;

class Cliente extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id_cliente');
    }
}