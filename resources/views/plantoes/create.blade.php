@component('../components.header', [
  'head_title' => $page_title,
  'body_title' => $page_title
  ])

@endcomponent()

<form method="POST" action="{{route('duty.store')}}">
  @csrf
  @method('post')
  <div class="form-group">
    <label for="">Data do Plantão</label>
    <input type="text" name="plantaoData" class="form-control" id="" placeholder="AAAA-MM-DD" required>
  </div>
  @error('plantaoData')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label for="">Atendente Interno</label>
    <input type="text" name="plantonistaInterno" class="form-control" id="" placeholder="NETO RODRIGUES" required>
  </div>
  @error('plantonistaInterno')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label for="">Atendente Externo</label>
    <input type="text" name="plantonistaExterno" class="form-control" id="" placeholder="CESAR RODRIGUES" required>
  </div>
  @error('plantonistaExterno')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label for="">Observações</label>
    <input type="text" name="observacoes" class="form-control" id="" placeholder="Feriado? Aconteceu algo a mais?">
  </div>
  
  @error('observacoes')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

    <input type=submit class="btn btn-primary">
</form>


@component('../components.footer')

@endcomponent()