<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$artista = $_POST["artista"];
$album = $_POST["album"];
$genero = $_POST["genero"];
$ano = $_POST["ano_lancamento"];
$duracao = $_POST["duracao_segundos"];
$gravadora = $_POST["gravadora"];
$compositor = $_POST["compositor"];
$letra = $_POST["letra"];
$caminho = $_POST["caminho_arquivo"];
$data = $_POST["data_cadastro"];

$bd = mysqli_connect("localhost","root","","repertorio") OR DIE ("Erro ao conectar!");
//conecta com o servidor mysql

$es=mysqli_query($bd,"update musicas set titulo='$titulo', 
										artista='$artista', 
										album='$album',
										genero='$genero', 
										ano_lancamento='$ano', 
										duracao_segundos='$duracao', 
										gravadora='$gravadora', 
										compositor='$compositor', 
										letra='$letra', 
										caminho_arquivo='$caminho',
										data_cadastro='$data' 
										where id='$id'");
if ($es==1)
{
    echo "Id: $id<br>
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
		  Data de cadastro: $data<br<hr>";

	echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
	echo "<a href=consultar.html>Voltar para nova Consulta";
?>
</body>
</html>
