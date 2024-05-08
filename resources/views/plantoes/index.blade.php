@component('../components.header', [
  'head_title' => $head_title,
  'body_title' => $body_title
  ])

@endcomponent()

@component('../components.sidebar')

@endcomponent()

<div class="content">

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">DATA</th>
        <th scope="col">SEM</th>
        <th scope="col">INTERNO</th>
        <th scope="col">EXTERNO</th>
        <th scope="col">VISITA</th>
        {{-- <th scope="col">OBSERVAÇÕES</th> --}}
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
          {!! ($plantao['teveVisita'])? "HOUVE" : "NÃO HOUVE" !!}
        </td>
        {{-- <td>
          @if($plantao['observacoes'])
          
            <button type="button" class="btn btn-primary" onclick="alert('{!! $plantao['observacoes']!!}')">ver comentario</button>
          
          @endif
        </td> --}}
        <td>
          <a href="{{route('dutyservices.index', ['plantao' => $plantao])}}">
            <button type="button" class="btn btn-primary">VIEW</button></a>
          <a href="{{route('duty.edit', ['plantao' => $plantao])}}">
            <button type="button" class="btn btn-primary">EDITAR</button></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@component('../components.footer')

@endcomponent()