<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duty;
use App\Models\Dutyservice;

class DutyController extends Controller
{
    public function read(Request $request) {
        
        $plantao = new Duty;
        $mes = $request->input('mes');
        $ano = $request->input('ano');
        $data = ['page_title' => 'Plantoes'];

        if (!$mes && !$ano) {
            $mes = date('m');
            $ano = date('Y');
            $plantoes = $plantao
                ->all()->where('plantaoData', '>', $ano.'-'.$mes.'-00')
                ->where('plantaoData', '<' , $ano.'-'.$mes.'-32')
                ->sortBy('plantaoData');

            $data += ['plantoes' => $plantoes];
            return view('plantoes.index', $data);
        }

        $plantoes = $plantao->all()
            ->where('plantaoData', '>', $ano.'-'.$mes.'-00')
            ->where('plantaoData', '<' , $ano.'-'.$mes.'-32')
            ->sortBy('plantaoData');

        $data += ['plantoes' => $plantoes];
        return view('plantoes.index', $data);
    }

    public function create(Request $request) {
        $data = [
            'page_title' => 'Novo Plantao'
        ];
        return view('plantoes.create', $data);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'plantaoData' => 'required|string',
            'plantonistaInterno' => 'required|string',
            'plantonistaExterno' => 'required|string'
        ]);

        $newDuty = Duty::create($data);

        return redirect(route('duty.index'));
    }

    public function dutyservices_read(Request $request) {
        $duty_id = $request->input('id');
        $duty_query = new Duty;
        $plantao = $duty_query->get()->where('id', '=', $duty_id)->first();

        if (!$duty_id || !$plantao) {
            return redirect('plantoes');
        };


        $duty_service = new DutyService;
        $atendimentos = $duty_service->all()->where('id_duty', '=', $duty_id);
        
        $data = [
            'atendimentos' => $atendimentos,
            'page_title' => 'Plantao '.strftime('%d/%m/%Y', (strtotime($plantao['plantaoData']))),
            'plantao' => $plantao
        ];

        return view('atendimentos.index', $data);
    }

    public function dutyservice_create(Request $request) {
        $data = [
            'page_title' => 'Adicionar um chamado para o Plantão'
        ];
        return view('atendimentos.create', $data);
    }

    public function dutyservice_store(Request $request) {
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