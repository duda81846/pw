<html>
<body>
    <?php
    $n = $_POST['numero'];
    echo "TABUADA<br>";
    for($t = 1; $t <= 10; $t++){
    $multiplicacao = $n * $t;
    echo "$n x $t = $multiplicacao<br>";}
    ?>
</body>
</html>