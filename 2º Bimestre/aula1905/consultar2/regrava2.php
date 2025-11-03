<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
$Id = $_POST["IdPropriedade"];
$Endereco = $_POST["Endereco"];
$Cidade = $_POST["Cidade"];
$Estado = $_POST["Estado"];
$CEP = $_POST["CEP"];
$Tipo = $_POST["Tipo"];
$Valor = $_POST["Valor"];

$bd = mysqli_connect("localhost","root","","imobiliaria") OR DIE ("Erro ao conectar!");
//conecta com o servidor mysql

$es=mysqli_query($bd,"update propriedades set Endereco= '$Endereco',
												Cidade= '$Cidade',
												Estado= '$Estado',
												CEP= '$CEP',
												Tipo= '$Tipo',
												Valor= '$Valor'
												where IdPropriedade= '$Id'");
if ($es==1)
{
    echo "IdPropriedade: $Id<br>
	Endereco: $Endereco<br>
	Cidade: $Cidade<br>
	Estado: $Estado<br>
	CEP: $CEP<br>
	Tipo: $Tipo<br>
	Valor: $Valor<br>";
	
	echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
	echo "<a href=consultar2.html>Voltar para nova Consulta";
?>
</body>
</html>
