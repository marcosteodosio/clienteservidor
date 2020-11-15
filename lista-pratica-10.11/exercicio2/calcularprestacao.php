<?php

$salario = $_GET['salario'];
$prestacao = $_GET['prestacao'];


$valorPrestacaoLimite = calcularPrestacao($salario);
$situacao = calcularPossibilidade($valorPrestacaoLimite, $prestacao);

function calcularPrestacao($salario){
    $prestacaoLimite = $salario * 0.3;
    return $prestacaoLimite;
}

function calcularPossibilidade($valorPrestacaoLimite, $prestacao){
    if($prestacao<=$valorPrestacaoLimite){
        return $situacao = "Permitido";
    } else{
        return $situacao = "Não Permitido";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Exercício 02</title>
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
    <h5 class="card-title">Prestação</h5>
    <p class="card-text">Prestação: <?php print $prestacao ?></p>
    <p class="card-text">Valor limite possível: <?php print $valorPrestacaoLimite ?></p>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">É permitido?</h5>
    <p class="card-text"> <?php print $situacao ?></p>    
  </div>
</div>

</div>

</body>
</html>