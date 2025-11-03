<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php
 
$cpf=trim($_GET["pl"]);
 
$bd=mysqli_connect("localhost","root","","clinica") or die ("erro!");
 
 
$sql="select * from pacientes where cpf = '$cpf'"; //consulta sql
 
$consulta=mysqli_query($bd, $sql); //faz a consulta de todos os registros
$reg=mysqli_fetch_array($consulta); // cria uma matriz com todos os campos e registros
 
if ($reg==0)
{
     echo "ERRO - Registro não Existe.  ";
     exit;
}
else
{
    $cpf = $reg["cpf"];
    $nome = $reg["nome"];
    $fone = $reg["fone"];
    $data_consulta = $reg["data_consulta"];
    $receita = $reg["receita"];
    $quadro_clinico = $reg["quadro_clinico"];
}
?>
<center><h2>Alterar Registros</center>
    <?php echo "cpf: $cpf<br><br>" ?>
    <form method="POST" action="regrava.php">
        <p>                 <input type="hidden" size="10" name="cpf"               value ='<?php echo "$cpf"; ?>'>
        <p>nome:            <input type="text" size="40"   name="nome"              value ='<?php echo "$nome"; ?>'></p>
        <p>fone:            <input type="text" size="50"   name="fone"              value ='<?php echo "$fone"; ?>'></p>
        <p>data_consulta:   <input type="text" size="20"   name="data_consulta"     value ='<?php echo "$data_consulta"; ?>'></p>
        <p>receita:         <input type="text" size="20"   name="receita"           value ='<?php echo "$receita"; ?>'></p>
        <p>quadro_clinico:  <input type="text" size="20"   name="quadro_clinico"    value ='<?php echo "$quadro_clinico"; ?>'></p>
        <input type="submit" name="B1" value="Alterar"></p>
    </form>
   
</body>
</html>