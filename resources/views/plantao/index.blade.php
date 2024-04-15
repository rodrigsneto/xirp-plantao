<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Plantonistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
  ?>


    <h1 class="h1"><?=$page_title;?></h1>
    <h1 class="h4">Março de 2024</h1>

    <a href="/plantao/novo"><button type="button" class="btn btn-primary">ADICIONAR UM NOVO PLANTAO</button></a>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">DIA</th>
            <th scope="col">SEMANA</th>
            <th scope="col">PLANT. INTERNO</th>
            <th scope="col">PLANT. EXTERNO</th>
            <th scope="col">VISITAS</th>
            <th scope="col">OBSERVAÇÕES</th>
            <th scope="col">AÇÕES</th>
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
              <a href="/plantao/selected/{{$plantao['id']}}"><button type="button" class="btn btn-primary">VIEW</button></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>