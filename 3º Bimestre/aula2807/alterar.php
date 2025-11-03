<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php

$id=trim($_GET["pl"]);

$bd=mysqli_connect("localhost","root","","repertorio") or die ("erro!");


$sql="select * from musicas where id = '$id'"; //consulta sql

$consulta=mysqli_query($bd, $sql); //faz a consulta de todos os registros
$reg=mysqli_fetch_array($consulta); // cria uma matriz com todos os campos e registros

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
	$id = $reg["id"];
	$titulo = $reg["titulo"];
	$artista = $reg["artista"];
	$album = $reg["album"];
	$genero = $reg["genero"];
	$ano = $reg["ano_lancamento"];
	$duracao = $reg["duracao_segundos"];
	$gravadora = $reg["gravadora"];
	$compositor = $reg["compositor"];
	$letra = $reg["letra"];
	$caminho = $reg["caminho_arquivo"];
	$data = $reg["data_cadastro"];
}
?>
<center><h2>Alterar Registros</center>
	<?php echo "Id: $id<br><br>" ?>
	<form method="POST" action="regrava.php">
		<p><input type="hidden" size="10" name="id" value='<?php echo "$id"; ?>'></p>
		<p>Título: 					<input type="text" size="40" name="titulo" 				value='<?php echo "$titulo"; ?>'></p>
		<p>Artista: 				<input type="text" size="50" name="artista" 			value='<?php echo "$artista"; ?>'></p>
		<p>Álbum: 				    <input type="text" size="50" name="album" 			    value='<?php echo "$album"; ?>'></p>
		<p>Gênero: 					<input type="text" size="20" name="genero" 				value='<?php echo "$genero"; ?>'></p>
		<p>Ano de lançamento: 		<input type="text" size="20" name="ano_lancamento" 		value='<?php echo "$ano"; ?>'></p>
		<p>Duração em segundos: 	<input type="text" size="20" name="duracao_segundos" 	value='<?php echo "$duracao"; ?>'></p>
		<p>Gravadora: 				<input type="text" size="20" name="gravadora" 			value='<?php echo "$gravadora"; ?>'></p>
		<p>Compositor: 				<input type="text" size="20" name="compositor" 			value='<?php echo "$compositor"; ?>'></p>
		<p>Letra:					<input type="text" size="20" name="letra" 				value='<?php echo "$letra"; ?>'></p>
		<p>Caminho de arquivo:		<input type="text" size="20" name="caminho_arquivo"		value='<?php echo "$caminho"; ?>'></p>
		<p>Data de cadastro:		<input type="text" size="20" name="data_cadastro"		value='<?php echo "$data"; ?>'></p>
		<input type="submit" name="B1" value="Alterar"></p>
 	</form>	
	
</body>
</html>
