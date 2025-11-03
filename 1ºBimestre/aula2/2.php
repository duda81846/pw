<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome=$_POST["a"];;
$qtingresso = $_POST["b"];
$tipo=$_POST["c"];
if($tipo=="2")
  $valor=$qtingresso*(100-(100*0.5));
 
if($tipo=="1")
  $valor=$qtingresso*(100-(100*0.4));
  
if($tipo=="3")
  $valor=$qtingresso*(100-(100*0.2));
 
if($tipo=="4")
  $valor=$qtingresso*100;

  echo"<br>Nome: $nome<br> Quantidade de ingressos: $qtingresso<br> Tipo de ingresso: $tipo<br> Valor ser pago: $valor";
?>
</body>
</html>