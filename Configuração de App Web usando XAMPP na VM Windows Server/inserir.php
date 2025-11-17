<?php
 
$servidor = "localhost";
$usuario = "root";
$senha = "";      
$banco = "agenda";
 
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
 
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $insta = $_POST['instagram'];
 
    $stmt = $conn->prepare("INSERT INTO dados (nome, email, telefone, instagram) VALUES (?, ?, ?, ?)");
   
    $stmt->bind_param("ssss", $nome, $email, $telefone, $instagram);
   
    if ($stmt->execute()) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $stmt->error;
    }
 
    $stmt->close();
    $conn->close();
}
 
?>
<a href=consulta.html>Voltar para tela inicial