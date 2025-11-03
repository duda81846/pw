<html>
 <body>
     <?php
     $km = $_POST['km'];
     $litros = $_POST['litros'];
     $cm = $km/$litros;
     echo "O comsumo médio de combustível por km é: $cm";
     ?>
 </body>   
</html>