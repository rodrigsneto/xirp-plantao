<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    // fillable podem ser os arquivos que eu defino assim que inicio a instancia
    protected $fillable = [
        'plantaoData', 'plantonistaInterno', 'plantonistaExterno', 'observacoes'
    ];
    use HasFactory;
}
