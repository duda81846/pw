<HTML>
<BODY>
<?php
$email=     $_POST["email"];
$senha=     $_POST["senha"];
$bd=mysqli_connect("localhost","root","","empresa") or die ("erro!");
$consulta=mysqli_query($bd,"select * from usuario where senha='$senha' and email= '$email'");
$reg = mysqli_fetch_array($consulta);
if ($reg==0)
{
    echo "Não existem registros para a pesquisa!";
    exit;
}
while ($reg!=0)
{
    $id = $reg["id"];
    $nome = $reg["nome"];
    $email = $reg["email"];
    $fone = $reg["fone"];
    $senha = $reg["senha"];
    $foto = $reg["foto"];
   
    echo   "Id: $id<br>
            Nome: $nome<br>
            Email: $email<br>
            Telefone: $fone<br>
            Senha: $senha<br>
            Foto: $foto<BR>
            <img src='img/$foto' width='25%' height='25%'>";
    ?>
    <?php
    $reg = mysqli_fetch_array($consulta);      
}
?>
<br><a href="consulta.html">Voltar</a><br>
</body>
</html>