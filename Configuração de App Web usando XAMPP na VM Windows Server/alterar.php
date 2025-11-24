<?php
$nome = trim($_GET["pl"]);
 
$bd = mysqli_connect("localhost", "root", "", "agenda") or die("Erro na conexão!");
 
if (!$nome) {
    echo "Erro: nenhum nome informado!";
    exit;
}
 
$sql = "SELECT * FROM usuario WHERE nome = '$nome'";
$consulta = mysqli_query($bd, $sql);
 
$reg = mysqli_fetch_array($consulta);
 
if ($reg == 0) {
    echo "ERRO - Registro não existe.";
    exit;
} else {
    $nome = $reg["NOME"];
    $email = $reg["EMAIL"];
    $telefone = $reg["TELEFONE"];
    $conta_instagram = $reg["CONTA_INSTAGRAM"];
}
?>
 
<center><h2>Alterar Registros</h2></center>
<?php echo "Nome: $nome<br><br>"; ?>
 
<form method="POST" action="regrava.php">
    <p><input type="hidden" name="nome" value='<?php echo "$nome"; ?>'></p>
    <p>Email: <input type="text" size="40" name="email" value='<?php echo "$email"; ?>'></p>
    <p>Telefone: <input type="text" size="50" name="telefone" value='<?php echo "$telefone"; ?>'></p>
    <p>Instagram: <input type="text" size="50" name="conta_instagram" value='<?php echo "$conta_instagram"; ?>'></p>
 
    <input type="submit" name="B1" value="Alterar">
</form>
