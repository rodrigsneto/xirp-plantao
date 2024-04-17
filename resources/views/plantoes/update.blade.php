@component('../components.header', [
  'head_title' => $page_title,
  'body_title' => $page_title
  ])

@endcomponent()

<form method="POST" action="{{route('duty.update', ['plantao' => $plantao])}}">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="">Data do Plantão</label>
    <input type="text" name="plantaoData" class="form-control" id="" value="{{$plantao['plantaoData']}}" required>
  </div>
  <div class="form-group">
    <label for="">Atendente Interno</label>
    <input type="text" name="plantonistaInterno" class="form-control" id="" value="{{$plantao['plantonistaInterno']}}" required>
  </div>
  <div class="form-group">
    <label for="">Atendente Externo</label>
    <input type="text" name="plantonistaExterno" class="form-control" id="" value="{{$plantao['plantonistaExterno']}}" required>
  </div>
  <div class="form-group">
    <label for="">Observações</label>
    <input type="text" name="observacoes" class="form-control" id="" value="{{$plantao['observacoes']}}">
  </div>
    <input type=submit class="btn btn-primary">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>