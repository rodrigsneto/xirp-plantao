@component('../components.header', [
  'head_title' => $head_title,
  'body_title' => $body_title
  ])

@endcomponent()

<form method="POST" action="{{route('dutyservices.store', ['plantao' => $plantao])}}">
  @csrf
  @method('post')
  <div class="form-group">
    <label for="">Nome do Cliente</label>
    <input type="text" name="cliente" class="form-control" id="" placeholder="Exemplo: MACK 7" required>
  </div>
  <div class="form-group">
    <label for="">Nome do requisitante</label>
    <input type="text" name="requisitante" class="form-control" id="" placeholder="Exemplo: Flaviana" required>
  </div>
  <div class="form-group">
    <label for="">Contato</label>
    <input type="text" name="contato" class="form-control" id="" placeholder="Exemplo: 5585988888888" required>
  </div>
  <div class="form-group">
    <label for="">Assunto</label>
    <input type="text" name="assunto" class="form-control" id="" placeholder="Exemplo: SERVIDOR DESLIGOU" required>
  </div>
    <input type=hidden name="id_duty" value="{{$plantao['id']}}">
    <input type=submit class="btn btn-primary">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>