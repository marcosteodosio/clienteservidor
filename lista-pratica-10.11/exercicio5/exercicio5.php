<?php

$nome = $_GET['nome'];
$user = $_GET['user'];


$diasDevolucao = calcularEmprestimo($user);

function calcularEmprestimo($user){
    if($user == "professor"){
        return 10;
    }
    else if ($user == "aluno"){
        return 3;
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Exercício 05</title>
</head>
<body>
<div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nome do livro</h5>
    <p class="card-text">Livro: <?php print $nome ?></p>   
  </div>
</div>


<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Devolução em:</h5>
    <p class="card-text"><?php print $diasDevolucao ?> dias</p>    
  </div>
</div>

</div>



</body>
</html>