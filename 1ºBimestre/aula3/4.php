<html>
 <body>
     <?php
     $temperatura = $_POST['temperatura'];
     $conversao = $_POST['conversao'];
     $c=0;

     if ($conversao=='C')
        $c=$temperatura*1.8+32;
    
     
     if ($conversao=='F')
        $c=1.8*($temperatura-32);

     echo "A conversão dessa temperatura é de $c graus";

     ?>
 </body>   
</html>