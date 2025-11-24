<html>
<body>
<?php
if (isset($_GET["pl"])) {
    $nome = $_GET["pl"];  
    $bd = mysqli_connect("localhost", "root", "", "agenda") or die("Erro na conexão!");
    $stmt = $bd->prepare("DELETE FROM usuario WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    if ($stmt->affected_rows > 0)
        echo "O registro foi excluído com sucesso!";
    else
        echo "O registro NÃO foi encontrado ou não foi excluído!";
    $stmt->close();
    $bd->close();
} else {
    echo "Erro: nenhum nome informado!";
}
?>
<br><a href="consulta.html">Voltar para página de consulta</a><br>
</body>
</html>
