<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duty;
use App\Models\Dutyservice;

class DutyController extends Controller
{
    public function index() {
        $plantao = new Duty;
        $plantoes = $plantao->all();

        $data = [
            'page_title' => 'Adicionar um chamado para o Plantão',
            'plantoes' => $plantoes
        ];
        
        return view('plantao.index', $data);
    }

    public function selected() {
        return view('plantao.selected');
    }

    public function create(Request $request) {
        $data = [
            'page_title' => 'Adicionar um novo Plantão'
        ];
        return view('plantao.create', $data);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'plantaoData' => 'required|string',
            'plantonistaInterno' => 'required|string',
            'plantonistaExterno' => 'required|string'
        ]);

        $newDuty = Duty::create($data);

        return redirect(route('plantao.dashboard'));
    }

    public function new_dutyservice(Request $request) {
        $data = [
            'page_title' => 'Adicionar um chamado para o Plantão'
        ];
        return view('plantao.selected', $data);
    }

    public function new_dutyservice_action(Request $request) {
        $novo_atendimento = [
            'id_duty' => 1,
            'cliente' => "Mack 7",
            'requisitante' => "Flaviana",
            'contato' => '5585987777777',
            'assunto' => "PDV NAO LIGA"
        ];

        $duty_service = new Dutyservice($novo_atendimento);
        $duty_service->save();
        dd($duty_service);
    }
}