<!-- Painel lateral -->
<div class="sidebar bg-light">
    <h2>Menu</h2>
    <div class="mb-3">
        <a href="{{ route('duty.create') }}">
            <button class="btn btn-primary btn-block">Adicionar Plantão</button>
        </a>
    </div>
    <div class="mb-1">
        <a href="{{route('duty.index')}}?mes=04&ano=2024">
            <button class="btn btn-secondary btn-block">Voltar um Mês</button>
        </a>
    </div>
    <div class="mb-1">
        <a href="{{route('duty.index')}}">
            <button class="btn btn-secondary btn-block">Mês Atual</button>
        </a>
    </div>
    <div class="mb-1">
        <a href="{{route('duty.index')}}?mes=06&ano=2024">
            <button class="btn btn-secondary btn-block">Avançar um Mês</button>
        </a>
    </div>
</div>
