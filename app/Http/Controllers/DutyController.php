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
        $data = [
            'head_title' => 'Plantoes',
            'body_title' => 'Plantoes'
        ];

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
        $messages = [
            'plantaoData.required' => 'Este campo é obrigatório!',
            'plantaoData.date' => 'Este campo deve ser uma data!',
            'plantaoData.string' => 'Este campo deve ser um texto!',
            'plantonistaInterno.required' => 'Este campo é obrigatório!',
            'plantonistaExterno.required' => 'Este campo é obrigatório!',
            'observacoes' => 'Este campo deve ser um texto!'
        ];
        
        $data = $request->validate([
            'plantaoData' => 'date|required|string',
            'plantonistaInterno' => 'required|string',
            'plantonistaExterno' => 'required|string',
            'observacoes' => 'nullable|string'
        ], $messages);

        $newDuty = Duty::create($data);

        return redirect(route('duty.index'));
    }

    public function edit(Duty $plantao) {
        $data = [
            'page_title' => 'Editar',
            'plantao' => $plantao
        ];
        return view('plantoes.update', $data);
    }

    public function update(Duty $plantao, Request $request) {
        
        $new_values = $request->validate([
            'plantaoData' => 'required|string',
            'plantonistaInterno' => 'required|string',
            'plantonistaExterno' => 'required|string'
        ]);

        $plantao->update($new_values);

        return redirect(route('duty.index'));
    }

    public function dutyservices_read(Duty $plantao, Request $request) {

        if (!$plantao) {
            return redirect('plantoes');
        };

        $duty_service = new DutyService;
        $atendimentos = $duty_service->all()->where('id_duty', '=', $plantao['id']);

        // dd($atendimentos);
        
        $data = [
            'atendimentos' => $atendimentos,
            'page_title' => 'Plantao '.strftime('%d/%m/%Y', (strtotime($plantao['plantaoData']))),
            'plantao' => $plantao
        ];

        return view('atendimentos.index', $data);
    }

    public function dutyservice_create(Duty $plantao) {

        $duty_id = $plantao['id'];
        $duty_query = new Duty;
        
        $data = [
            'body_title' => 'Novo Atendimento '.strftime('%d/%m/%Y', (strtotime($plantao['plantaoData']))),
            'head_title' => 'Novo Atendimento',
            'plantao' => $plantao
        ];
        return view('atendimentos.create', $data);
    }

    public function dutyservice_store(Duty $plantao, Request $request) {

        $data = $request->validate([
            'id_duty' => 'required|string',
            'cliente' => 'required|string',
            'requisitante' => 'required|string',
            'contato' => 'required|string',
            'assunto' => 'required|string',
        ]);

        $plantaoAtualiza = new Duty;

        $plantao
        ->update(['teveVisita' => 1]);
        
        $newDutyservice = Dutyservice::create($data);
        
        return redirect(route('dutyservices.index', ['plantao' => $plantao]));
    }

    public function dutyservice_delete(Duty $plantao, Dutyservice $atendimento) {

        $atendimento
        ->delete();

        return redirect(route('dutyservices.index', ['plantao' => $plantao]));

    }
}