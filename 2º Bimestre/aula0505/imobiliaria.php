<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="cidade")
		$consulta=mysqli_query($bd,"select * from propriedades where tipo like '%$expressao%'");
	if ($op=="estado")
		$consulta=mysqli_query($bd,"select * from propriedades where tipo like '%$expressao%'");
	if ($op=="tipo")
		$consulta=mysqli_query($bd,"select * from propriedades where tipo like '%$expressao%'");
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
	$id = $reg["IdPropriedade"];
	$endereco = $reg["Endereco"];
	$cidade = $reg["Cidade"];
	$estado = $reg["Estado"];
	$cep = $reg["CEP"];
	$tipo = $reg["Tipo"];
	$valor = $reg["Valor"];

	echo   "Id Proprietario: $id<br>
			Endereço: $endereco<br>
			Cidade: $cidade<br>
			Estado: $estado<br>
			CEP: $cep<br>
			Tipo: $tipo<br>
			Valor: $valor<br>";
			
	?>
	<a href="excluir.php?pl=<?php echo $placa;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $placa;?>">Alterar</a><hr>
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="imobiliaria.html">Voltar</a><br>
</body>
</html>