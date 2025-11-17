<html>
<body>
<?php
$expressao= $_POST["expressao"];
$bd=mysqli_connect("localhost","root","","agenda") or die ("erro!");
 
if (isset($_POST ["op"]))
{
$op = $_POST ["op"];
if ($op=="nome")
$consulta=mysqli_query($bd,"select * from dados where nome='$expressao'");
if ($op=="email")
$consulta=mysqli_query($bd,"select * from dados where email='$expressao'");
if ($op=="telefone")
$consulta=mysqli_query($bd,"select * from dados where telefone ='$expressao'");
if ($op=="instagram")
$consulta=mysqli_query($bd,"select * from dados where instagram ='$expressao'");
} else
{
echo "volte a página e escolha outro campo para a pesquisa";
exit;
}
$reg = mysqli_fetch_array($consulta);
if ($reg==0)
{
echo "Não existem registros para a pesquisa!";
exit;
}
while ($reg!=0)
{
$nome = $reg["nome"];
$email = $reg["email"];
$telefone = $reg["telefone"];
$instagram = $reg["instagram"];
 
echo "nome: $nome<br>
email: $email<br>
telefone: $telefone<br>
instagram: $instagram<br>";
 
?>
<a href="excluir.php?pl=<?php echo $nome;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
 
<a href="alterar.php?pl=<?php echo $nome;?>">Alterar</a><hr>
<?php
$reg = mysqli_fetch_array($consulta);
}
?>
<br><a href="consulta.html">Voltar</a><br>
</body>
</html>