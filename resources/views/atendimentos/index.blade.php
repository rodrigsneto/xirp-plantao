@component('../components.header', [
  'head_title' => $page_title,
  'body_title' => $page_title
  ])

@endcomponent()

<div class="h5">Plantonista Interno - {{$plantao['plantonistaInterno']}}</div>
<div class="h5">Plantonista Externo - {{$plantao['plantonistaExterno']}}</div>
<div><div class="h5">Observacoes: {{$plantao['observacoes']}}</div></div>

<a href='{{route('duty.index')}}'><button type="button" class="btn btn-primary">HOME</button></a>
<a href='{{route('dutyservices.create', ['plantao' => $plantao])}}'><button type="button" class="btn btn-primary">Novo Atendimento</button></a>
<br />

<table class="table">
  <thead>
      <tr>
      <th scope="col">CLIENTE</th>
      <th scope="col">REQUISITANTE</th>
      <th scope="col">CONTATO</th>
      <th scope="col">ASSUNTO</th>
      <th scope="col">AÇÕES</th>
      </tr>
  </thead>
  <tbody>
      @foreach($atendimentos as $atendimento)
        <tr>
          <th scope="row">{{$atendimento['cliente']}}</th>
          <td>{{$atendimento['requisitante']}}</td>
          <td>{{$atendimento['contato']}}</td>
          <td>{{$atendimento['assunto']}}</td>
            <td>
              <form method="post" action="{{route('dutyservices.delete', ['atendimento' => $atendimento, 'plantao' => $plantao])}}">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-primary" value="Excluir">
            </td>
        </tr>
      @endforeach
  </tbody>
</table>  

@component('../components.footer')

@endcomponent()