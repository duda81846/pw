<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php

$Id=trim($_GET["pl"]);

$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


$sql="select * from propriedades where IdPropriedade = '$Id'"; //consulta sql

$consulta=mysqli_query($bd, $sql); //faz a consulta de todos os registros
$reg=mysqli_fetch_array($consulta); // cria uma matriz com todos os campos e registros

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
	$Id = $reg["IdPropriedade"];
	$Endereco = $reg["Endereco"];
	$Cidade = $reg["Cidade"];
	$Estado = $reg["Estado"];
	$CEP = $reg["CEP"];
	$Tipo = $reg["Tipo"];
	$Valor = $reg["Valor"];
}
?>
<center><h2>Alterar Registros</center>
	<?php echo "IdPropriedade: $Id<br><br>" ?>
	<form method="POST" action="regrava2.php">
		<p> 			<input type="hidden" size="10" name="IdPropriedade" value ='<?php echo "$Id"; ?>'>
		<p>Endereço: 	<input type="text" size="40"   name="Endereco" 		value ='<?php echo "$Endereco"; ?>'></p>
		<p>Cidade: 		<input type="text" size="50"   name="Cidade" 		value ='<?php echo "$Cidade"; ?>'></p>
		<p>Estado: 		<input type="text" size="20"   name="Estado" 			value ='<?php echo "$Estado"; ?>'></p>
		<p>CEP: 		<input type="text" size="20"   name="CEP" 			value ='<?php echo "$CEP"; ?>'></p>
		<p>Tipo:		<input type="text" size="20"   name="Tipo" 	value ='<?php echo "$Tipo"; ?>'></p>
		<p>valor: 		<input type="text" size="20"   name="Valor" 			value ='<?php echo "$Valor"; ?>'></p>
		<input type="submit" name="B1" value="Alterar"></p>
 	</form>	
	
</body>
</html>
