<html>
 <body>
     <?php
     $nota1 = $_POST['nota1'];
     $nota2 = $_POST['nota2'];
     $nota3 = $_POST['nota3'];
     $mp= (($nota1*2)+($nota2*3)+($nota3*5))/10;
     echo "A média ponderada é: $mp";
     ?>
 </body>   
</html>