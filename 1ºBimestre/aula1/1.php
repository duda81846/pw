<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula.17022025</title>
</head>
<body>
<?php
  $n1 = 120;
  $n2 = 35;
  $soma = $n1 + $n2; 
  $subtracao = $n1 - $n2;
  $multiplicacao = $n1 * $n2;
  $divisao = $n1/$n2;
  echo "A soma de $n1 e $n2 = $soma <br>";
  echo "A subtração de $n1 e $n2 = $subtracao <br>";
  echo "A multiplicação de $n1 e $n2 = $multiplicacao <br>";
  echo "A divisão de $n1 e $n2 = $divisao <br><br>";

  $peso = 57;
  $altura = 1.70;
  $imc = $peso/($altura*$altura);
  if ($imc > 18.5 && $imc < 24.9){
     echo "peso Normal (ideal)<br>";
  }else if($imc > 25 && $imc < 29.9)
    echo "Sobrepeso<br>";
  else if($imc > 30 && $imc < 34.9)
    echo "Obesidade grau I<br>";
  else if($imc > 35 && $imc < 39.9)
    echo "Obesidade grau II<br>";
  else if($imc > 40)
    echo "Obesidade grau III<br>";
  else if($imc < 18.5)
    echo "Magreza<br>";

    $nome="Duda";
    $qtingresso =2;
    $tipo="Idoso";
    $tipoE=$qtingresso*(100-(100*0.5));
    $tipoI=$qtingresso*(100-(100*0.4));
    $tipoC=$qtingresso*(100-(100*0.2));
    $tipoN=$qtingresso*100;
    
    echo"<br>Nome: $nome<br> Quantidade de ingressos: $qtingresso<br> Tipo de ingresso: $tipo<br> Valor ser pago: $tipoI";
  ?>
</body>
</html>