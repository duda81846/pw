<html>
<body>
<?php
$expressao = $_POST["expressao"];
$bd = mysqli_connect("localhost", "root", "", "agenda") or die("erro!");

if (isset($_POST["op"])) {
    $op = $_POST["op"];
    if ($op == "nome")
        $consulta = mysqli_query($bd, "SELECT * FROM usuario WHERE nome='$expressao'");
    if ($op == "email")
        $consulta = mysqli_query($bd, "SELECT * FROM usuario WHERE email='$expressao'");
    if ($op == "telefone")
        $consulta = mysqli_query($bd, "SELECT * FROM usuario WHERE telefone='$expressao'");
    if ($op == "conta_instagram")
        $consulta = mysqli_query($bd, "SELECT * FROM usuario WHERE conta_instagram='$expressao'");
} else {
    echo "volte a página e escolha outro campo para a pesquisa";
    exit;
}

$reg = mysqli_fetch_array($consulta);

if (!$reg) {
    echo "Não existem registros para a pesquisa!";
    exit;
}

while ($reg) {
    $nome = $reg["NOME"];
    $email = $reg["EMAIL"];
    $telefone = $reg["TELEFONE"];
    $conta_instagram = $reg["CONTA_INSTAGRAM"];

    echo "nome: $nome<br>
email: $email<br>
telefone: $telefone<br>
instagram: $conta_instagram<br>";
?>
<a href="excluir.php?pl=<?php echo $nome; ?>" onclick="return confirm('Exclui o registro?');">Excluir</a>
<a href="alterar.php?pl=<?php echo $nome; ?>">Alterar</a><hr>
<?php
    $reg = mysqli_fetch_array($consulta);
}
?>
<br><a href="consulta.html">Voltar</a><br>
</body>
</html>
