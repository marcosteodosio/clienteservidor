<?php

$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];


$media = calcularMedia($nota1, $nota2);
$situacao = calcularSituacao($media);

function calcularMedia($nota1, $nota2){
    $media = ($nota1+$nota2)/2;
    return $media;
}

function calcularSituacao($media){
    if($media>=7){
        return $situacao = "Aprovado";
    } else if($media >=3){
        return $situacao = "Exame";
    } else {
        return $situacao = "Reprovado";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Exercício 03</title>
</head>
<body>
    
<div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nome do aluno</h5>
    <p class="card-text">Nome: <?php print $nome ?></p>   
  </div>
</div>

<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Notas:</h5>
    <p class="card-text">Nota 1: <?php print $nota1 ?></p>
    <p class="card-text">Nota 2: <?php print $nota2 ?></p>
    <p class="card-text">Media:  <?php print $media ?></p>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Situação:</h5>
    <p class="card-text"><?php print $situacao ?></p>    
  </div>
</div>

</div>



</body>
</html>