<?php

$nome = $_GET['nome'];
$numDiaria = $_GET['numDiaria'];


$valorConta = calcularConta($numDiaria);

function calcularConta($numDiaria){
    if($numDiaria<10){
        $valorConta = 40+($numDiaria*15);
    } else {
        $valorConta = 40+($numDiaria*8);
    }
    return $valorConta;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Exercício 04</title>
</head>
<body>
    
<div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nome do hóspede</h5>
    <p class="card-text">Nome: <?php print $nome ?></p>   
  </div>
</div>


<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Valor final:</h5>
    <p class="card-text"><?php print $valorConta ?></p>    
  </div>
</div>

</div>



</body>
</html>