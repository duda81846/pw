<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Propriedades</TITLE>
</HEAD>
<BODY>
<?php
$end=			$_POST["Endereço"];
$cid=		$_POST["Cidade"];
$est= 		$_POST["Estado"];
$cep=			$_POST["CEP"];
$tipo=			$_POST["Tipo"];
$valor=	$_POST["Valor"];
$con=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!"); 
//$con=mysqli_connect("local","usuario","usuario aberto sem senha","nome do banco de dados") or die ("erro!");

$in = "insert into propriedades values (null,
                                    '$end',
								         	'$cid',
									         '$est',
									         '$cep',
								         	'$tipo',
								         	'$valor')"; //tabela em bd tem que estar na mesma ordem
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Endereço:		$end<BR>
   Cidade:		$cid<BR>
   Estado:		$est<BR>
   CEP:			$cep<BR>
   Tipo:			$tipo<BR>
   Valor:      $valor<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='imobiliaria.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

