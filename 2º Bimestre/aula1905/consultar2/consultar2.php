<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="endereco")
		$consulta=mysqli_query($bd,"select * from propriedades where Endereco like '%$expressao%'");
	if ($op=="cidade")
		$consulta=mysqli_query($bd,"select * from propriedades where Cidade like '%$expressao%'");
	if ($op=="tipo")
		$consulta=mysqli_query($bd,"select * from propriedades where Tipo like '%$expressao%'");
	if ($op=="valor")
		$consulta=mysqli_query($bd,"select * from propriedades where Valor >= '$expressao'");	
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
	$Id = $reg["IdPropriedade"];
	$Endereco = $reg["Endereco"];
	$Cidade = $reg["Cidade"];
	$Estado = $reg["Estado"];
	$CEP = $reg["CEP"];
	$Tipo = $reg["Tipo"];
	$Valor = $reg["Valor"];
	
	echo   "IdPropriedade: $Id<br>
			Endereço: $Endereco<br>
			Cidade: $Cidade<br>
			Estado: $Estado<br>
			CEP: $CEP<br>
			Tipo: $Tipo<br>
			Valor: $Valor<br>";
			
	?>
	<a href="excluir.php?pl=<?php echo $Id;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
	
	<a href="alterar2.php?pl=<?php echo $Id;?>">Alterar</a><hr>
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consultar2.html">Voltar</a><br>
</body>
</html>