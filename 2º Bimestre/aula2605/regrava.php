<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
 
<?php
$cpf=           $_POST["cpf"];
$nome=      $_POST["nome"];
$fone=      $_POST["fone"];
$data_consulta=         $_POST["data_consulta"];
$receita=           $_POST["receita"];
$quadro_clinico=    $_POST["quadro_clinico"];
 
$bd = mysqli_connect("localhost","root","","clinica") OR DIE ("Erro ao conectar!");
//conecta com o servidor mysql
 
$es=mysqli_query($bd,"update pacientes set nome='$nome',
                                        fone='$fone',
                                        data_consulta='$data_consulta',
                                        receita='$receita',
                                        quadro_clinico='$quadro_clinico'
                                        where cpf='$cpf'");
if ($es==1)
{
    echo "cpf: $cpf<br>
            nome: $nome<br>
          fone: $fone<br>
          data_consulta: $data_consulta<br>
          receita: $receita<br>
          quadro_clinico: $quadro_clinico<br>
          <hr>";
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