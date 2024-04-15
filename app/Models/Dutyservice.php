<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dutyservice extends Model
{
    protected $fillable = [
        'id_duty', 'cliente', 'requisitante', 'contato', 'assunto'
    ];
    use HasFactory;
}