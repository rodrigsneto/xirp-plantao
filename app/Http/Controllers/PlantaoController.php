<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantao;

class PlantaoController extends Controller
{
    public function create(Request $request) {
        $novoPlantao = [
            'plantaoData' => "2024-04-04",
            'plantonistaInterno' => "Rodrigues",
            'plantonistaExterno' => "Cesar",
            'teveVisita' => true,
            'observacoes' => "Sem nenhuma observação",
        ];

        $plantao = new Plantao($novoPlantao);

        dd($plantao);
    }
}
