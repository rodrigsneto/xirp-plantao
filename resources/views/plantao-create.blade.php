<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Plantonistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php 
$page_title = "Titulo da Página";
?>

<body>
<h1 class="h1"><?=$page_title;?></h1>

<form method="POST" action="<?=$base;?>plantao-novo">
  <div class="form-group">
    <label for="">Data do Plantão</label>
    <input type="text" name="data" class="form-control" id="" placeholder="AAAA-MM-DD">
  </div>
  <div class="form-group">
    <label for="">Atendente Interno</label>
    <input type="text" name="plantonista_interno" class="form-control" id="" placeholder="NETO RODRIGUES">
  </div>
  <div class="form-group">
    <label for="">Atendente Externo</label>
    <input type="text" name="plantonista_externo" class="form-control" id="" placeholder="CESAR RODRIGUES">
  </div>
  <div class="form-group">
    <label for="">Observações</label>
    <input type="text" name="observacao" class="form-control" id="" placeholder="Feriado? Aconteceu algo a mais?">
  </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>