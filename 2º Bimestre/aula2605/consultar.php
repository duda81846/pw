<HTML>
<BODY>
<?php
$expressao=     $_POST["expressao"];
$bd=mysqli_connect("localhost","root","","clinica") or die ("erro!");
 
 
if (isset($_POST ["op"]))
{
    $op = $_POST ["op"];
    if ($op=="nome")
        $consulta=mysqli_query($bd,"select * from pacientes where nome='$expressao'");
    if ($op=="data_consulta")
        $consulta=mysqli_query($bd,"select * from pacientes where data_consulta='$expressao'");
    if ($op=="quadro_clinico")
        $consulta=mysqli_query($bd,"select * from pacientes where quadro_clinico = '%$expressao%'");
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
    $cpf = $reg["cpf"];
    $nome = $reg["nome"];
    $fone = $reg["fone"];
    $data_consulta = $reg["data_consulta"];
    $receita = $reg["receita"];
    $quadro_clinico = $reg["quadro_clinico"];
   
    echo   "cpf: $cpf<br>
            nome: $nome<br>
            fone: $fone<br>
            data_consulta: $data_consulta<br>
            receita: $receita<br>
            quadro_clinico: $quadro_clinico<br>";
           
    ?>
    <a href="excluir.php?pl=<?php echo $cpf;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
   
    <a href="alterar.php?pl=<?php echo $cpf;?>">Alterar</a><hr>
    <?php
    $reg = mysqli_fetch_array($consulta);      
}
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>