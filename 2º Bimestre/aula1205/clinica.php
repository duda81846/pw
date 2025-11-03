<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","clinica") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="quadro")
		$consulta=mysqli_query($bd,"select * from pacientes where quadro_clinico like'%$expressao%'");
	if ($op=="data")
		$consulta=mysqli_query($bd,"select * from pacientes where data_consulta like '%$expressao%'");
	if ($op=="nome")
		$consulta=mysqli_query($bd,"select * from pacientes where nome like '%$expressao%'");
} else
{
	echo "volte a página e escolha o campo que fará a pesquisa";
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
	$cpf = $reg["cpf"];
	$nome = $reg["nome"];
	$fone = $reg["fone"];
	$data = $reg["data_consulta"];
	$receita = $reg["receita"];
	$quadro = $reg["quadro_clinico"];
	
	echo   "CPF: $cpf<br>
			Nome: $nome<br>
			Telefone: $fone<br>
			Data da consulta: $data<br>
			Receita: $receita<br>
			Quadro clinico: $quadro <br>";
			
	?>
	<a href="excluir.php?pl=<?php echo $placa;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $placa;?>">Alterar</a><hr>
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="clinica.html">Voltar</a><br>
</body>
</html>