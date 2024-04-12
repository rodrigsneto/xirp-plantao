<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantao;

class PlantaoController extends Controller
{
    public function create(Request $request) {
        $novoPlantao = [
            'plantonistaInterno' => "Rodrigues"
        ];

        $plantao = new Plantao($novoPlantao);

        dd($plantao);
    }
}
