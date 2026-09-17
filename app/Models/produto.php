<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'valor',
        'qtd_estoque',
        'qtd_minima'
    ];

    public function caracteristicas()
    {
        return $this->hasMany(CaracteristicaProduto::class);
    }
}
