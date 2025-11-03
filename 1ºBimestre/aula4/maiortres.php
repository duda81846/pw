<html>
<body>
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $maior = max($n1, $n2, $n3);
    echo "O maior número desses três é: $maior";
    ?>
</body>
</html>