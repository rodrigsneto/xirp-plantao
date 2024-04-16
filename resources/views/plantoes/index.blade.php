@component('../components.header', [
  'page_title' => $page_title])

@endcomponent()

<h1 class="h4">Abril de 2024</h1>
<br />
<a href="{{route('duty.index')}}?mes=03&ano=2024"><button type="button" class="btn btn-primary">Março</button></a>
<a href="{{route('duty.index')}}?mes=04&ano=2024"><button type="button" class="btn btn-primary">Abril</button></a>
<a href="{{route('duty.index')}}?mes=05&ano=2024"><button type="button" class="btn btn-primary">Maio</button></a>
<br /><br />
<a href="{{route('duty.create')}}"><button type="button" class="btn btn-primary">Novo Plantão</button></a>
<br /><br />

<table class="table">
  <thead>
    <tr>
      <th scope="col">DIA</th>
      <th scope="col">SEMANA</th>
      <th scope="col">PLANT. INTERNO</th>
      <th scope="col">PLANT. EXTERNO</th>
      <th scope="col">VISITAS</th>
      <th scope="col">OBSERVAÇÕES</th>
      <th scope="col">VISUALIZAR</th>
    </tr>
  </thead>
  <tbody>

    @foreach($plantoes as $plantao)
    <tr>
      <th scope="row">{{strftime('%d/%m/%Y', (strtotime($plantao['plantaoData'])))}}</th>
      <td>
        {{strftime('%a', (strtotime($plantao['plantaoData'])))}}</td>
      <td>{{$plantao['plantonistaInterno']}}</td>
      <td>{{$plantao['plantonistaExterno']}}</td>
      <td>
        {!! ($plantao['teveVisita'])? "HOUVE VISITA" : "NÃO HOUVE VISITA" !!}</td>
      <td>
        @if($plantao['observacoes'])
        
          <button type="button" class="btn btn-primary" onclick="alert('{!! $plantao['observacoes']!!}')">ver comentario</button>
        
        @endif
      <td>
        <a href="/atendimentos?id={{$plantao['id']}}"><button type="button" class="btn btn-primary">VIEW</button></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>