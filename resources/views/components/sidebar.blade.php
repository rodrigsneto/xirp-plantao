<!-- Painel lateral -->
<div class="sidebar bg-light">
    <h2>Menu</h2>
    <div class="mb-3">
        <a href="{{ route('duty.create') }}">
            <button class="btn btn-primary btn-block">Adicionar Plantão</button>
        </a>
    </div>
    <h1>
        @php
            // Criar um objeto DateTime para a data atual
            $data_atual = new DateTime();
            $data_atual_2 = new DateTime();

            // Subtrair um mês da data atual
            $data_mes_passado = $data_atual->modify('-31 days');
            $data_mes_proximo = $data_atual_2->modify('+30 days');

            // Obter o valor do mês passado
            $mes_passado = $data_mes_passado->format('m');
            $mes_proximo = $data_mes_proximo->format('m');
            
        @endphp 
    </h1> 
    <div class="btn-side-actions">
        <div class="mb-1">
            <a href="{{route('duty.index')}}?mes={{$mes_passado}}&ano=2024">
                {{-- <button class="btn btn-secondary btn-block">Voltar um Mês</button> --}}
                <button class="btn btn-secondary btn-block">Mes Passado</button>
            </a>
        </div>
        <div class="mb-1">
            <a href="{{route('duty.index')}}">
                <button class="btn btn-secondary btn-block">Mês Atual</button>
            </a>
        </div>
        <div class="mb-1">
            <a href="{{route('duty.index')}}?mes={{$mes_proximo}}&ano=2024">
                {{-- <button class="btn btn-secondary btn-block">Avançar um Mês</button> --}}
                <button class="btn btn-secondary btn-block">Proximo Mes</button>
            </a>
        </div>
    </div>
</div>
