@component('../components.header', [
  'page_title' => $page_title
  ])

@endcomponent()

<div class="h5">Plantonista Interno - {{$plantao['plantonistaInterno']}}</div>
<div class="h5">Plantonista Externo - {{$plantao['plantonistaExterno']}}</div>
<div><div class="h5">Observacoes: {{$plantao['observacoes']}}</div></div>

<a href='{{route('dutyservices.create')}}'><button type="button" class="btn btn-primary">Novo Atendimento</button></a>
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
              <a href="#"><button type="button" class="btn btn-primary">EDITAR</button></a>
              <a href="#"><button type="button" class="btn btn-primary">EXCLUIR</button></a>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>