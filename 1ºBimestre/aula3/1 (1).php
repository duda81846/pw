<html>
<body>
    <?php
 $comprimento = $_POST['comprimento'];
 $largura = $_POST['largura'];
 $altura = $_POST['altura'];
 $volume = $altura*$largura*$comprimento;
 echo "O volume é: $volume";
 ?>
</body>
</html>