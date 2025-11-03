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
  $peso = $_POST["a"];
  $altura = $_POST["b"];
  $imc = $peso/($altura*$altura);
    if ($imc > 18.5 && $imc < 24.9)
        echo "peso Normal (ideal)<br>";
    if($imc > 25 && $imc < 29.9)
        echo "Sobrepeso<br>";
    if($imc > 30 && $imc < 34.9)
        echo "Obesidade grau I<br>";
    if($imc > 35 && $imc < 39.9)
        echo "Obesidade grau II<br>";
     if($imc > 40)
        echo "Obesidade grau III<br>";
    if($imc < 18.5)
        echo "Magreza<br>";
?>
</body>
</html>