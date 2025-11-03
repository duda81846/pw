<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Fixar</TITLE>
</HEAD>
<BODY>
<?php
$cpf=			$_POST["cpf"];
$nome=		    $_POST["nome"];
$fone= 		    $_POST["fone"];
$datac=			$_POST["datac"];
$receita=	    $_POST["receita"];
$quadroc=	    $_POST["quadroc"];
$con=mysqli_connect("localhost","root","","clinica") or die ("erro!"); 
//$con=mysqli_connect("local","usuario","usuario aberto sem senha","nome do banco de dados") or die ("erro!");

$in = "insert into pacientes values ('$cpf',
								    '$nome',
									'$fone',
									'$datac',
								    '$receita',
								    '$quadroc')"; //tabela em bd tem que estar na mesma ordem
$fixar=mysqli_query($con,$in);
if ($fixar==1)
{
   echo "
   CPF:		           $cpf<BR>
   Nome:		       $nome<BR>
   Telefone:	       $fone<BR>
   Data da consulta:   $datac<BR>
   Receita:			   $receita<BR>
   Quadro clinico:     $quadroc<BR>";
   
   echo "Registro fixado com sucesso!<BR>";
}
else
{
   echo "Registro NÃO fixado!<BR>";
}
echo "<a href='fixacao.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

