<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duty;

class DutyController extends Controller
{
    public function index() {
        return view('plantao-dashboard');
    }

    public function selected() {
        return view('plantao-selected');
    }

    public function create(Request $request) {
        $novoDuty = [
            'plantaoData' => "2024-04-04",
            'plantonistaInterno' => "Rodrigues",
            'plantonistaExterno' => "Cesar",
            'teveVisita' => true,
            'observacoes' => "Sem nenhuma observação",
        ];

        $duty = new Duty($novoDuty);

        $duty->save();

        dd($duty);
    }
}