<?php

$salario = $_GET['salario'];
$percentual = $_GET['percentual'];


$aumentoSalario = calcularAumento($salario, $percentual);
$novoSalario = $salario + $aumentoSalario;

function calcularAumento($salario, $percentual){
    $aumento = $salario * ($percentual/100);
    return $aumento;
}

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Exercício 01</title>
  </head>
  <body>
 
  <div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Salário</h5>
    <p class="card-text">Salário: <?php print $salario ?></p>   
  </div>
</div>

<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">% Aumento</h5>
    <p class="card-text"><?php print $percentual ?> %</p>
    <p class="card-text">Valor Aumento:  <?php print $aumentoSalario ?></p>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Novo Salário</h5>
    <p class="card-text">Novo Salário: <?php print $novoSalario ?></p>    
  </div>
</div>

</div>
  </body>
</html>