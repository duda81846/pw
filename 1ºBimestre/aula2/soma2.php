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
  $x = $_POST["a"];
  $y = $_POST["b"];
  $soma = $x + $y;
  echo "A soma de $x + $y = $soma";
?>
</body>
</html>