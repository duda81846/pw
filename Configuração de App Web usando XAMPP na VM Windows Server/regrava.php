<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$insta = $_POST["insta"];
 
$bd = mysqli_connect("localhost", "root", "", "agenda") or die("Erro ao conectar!");
 
if (!$bd) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
 
$sql = "UPDATE dados SET email = ?, telefone = ?, insta = ? WHERE nome = ?";
 
$stmt = $bd->prepare($sql);
if (!$stmt) {
    die("Erro ao preparar a consulta: " . $bd->error);
}
 
$stmt->bind_param("ssss", $email, $telefone, $instagram, $nome);
 
if ($stmt->execute()) {
    echo "Registro alterado com sucesso! <br><br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Telefone: $telefone<br>";
    echo "Instagram: $instagram<br><hr>";
} else {
    echo "ERRO - Registro não Alterado. " . $stmt->error . "<br><br>";
}
 
$stmt->close();
$bd->close();
 
echo "<a href='consulta.html'>Voltar para nova Consulta</a>";
?>