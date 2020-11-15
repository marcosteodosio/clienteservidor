<?php

$mes = $_GET['mes'];



$nome = descobrirNome($mes);

function descobrirNome($mes){
   switch ($mes){
       case 1:
        return "Janeiro";
       break;
       case 2:
        return "Fevereiro";
       break;
       case 3:
        return "Março";
       break;
       case 4:
        return "Abril";
        break;
       case 5:
        return "Maio";
        break;
       case 6:
        return "Junho";
    break;
       case 7:
        return "Julho";
    break;
       case 8:
        return "Agosto";
    break;
       case 9:
        return "Setembro";
    break;
       case 10:
        return "Outubro";
    break;
       case 11:
        return "Novembro";
    break;
       case 12:
        return "Dezembro";
    break;
       default:
       return "Mês inválido";
   }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Exercício 06</title>
</head>
<body>
<div class="container">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Número do Mês</h5>
    <p class="card-text">Número: <?php print $mes ?></p>   
  </div>
</div>


<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nome do Mês:</h5>
    <p class="card-text">Nome: <?php print $nome ?></p>    
  </div>
</div>

</div>



</body>
</html>