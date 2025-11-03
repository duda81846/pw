<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];



if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="titulo")
		$consulta=mysqli_query($bd,"select * from musicas where titulo='$expressao'");
	if ($op=="artista")
		$consulta=mysqli_query($bd,"select * from musicas where artista='$expressao'");
	if ($op=="genero")
		$consulta=mysqli_query($bd,"select * from musicas where genero ='$expressao'");
	if ($op=="ano")
		$consulta=mysqli_query($bd,"select * from musicas where ano_lacamento ='$expressao'");	
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
	
	echo   "Id: $id<br>
			Título: $titulo<br>
			Artista: $artista<br>
			Álbum: $album<br>
			Gênero: $genero<br>
			Ano de lançamento: $ano<br>
			Duração em segundos: $duracao<br>
			Gravadora: $gravadora<br>
			Compositor: $compositor<br>
			Letra: $letra<br>
			Caminho de arquivo: $caminho<br>
			Data de cadastro: $data<br>";
			
	?>
	<a href="excluir.php?pl=<?php echo $id;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $id;?>">Alterar</a><hr>
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>