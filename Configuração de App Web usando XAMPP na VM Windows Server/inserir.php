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
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['conta_instagram'])) {
        $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
        $conta_instagram = mysqli_real_escape_string($conn, trim($_POST['conta_instagram']));

        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, telefone, conta_instagram) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $telefone, $conta_instagram);


        if ($stmt->execute()) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir registro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }

    $conn->close();
}

?>

<!-- Link de volta para a tela inicial -->
<a href="consulta.html">Voltar para tela inicial</a>
