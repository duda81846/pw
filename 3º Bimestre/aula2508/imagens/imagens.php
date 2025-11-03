<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens</title>
</head>
<body>
<?php
$bd=mysqli_connect("localhost","root","","empresa") or die ("erro!");
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];
$arquivo = $_FILES['arquivo']['name'];// Pega o nome do arquivo enviado por upload
$destino = 'img/'. $arquivo;// Define o caminho de destino onde a imagem será salva e o ponto é para juntar o img com o arquivo
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];// Pega o caminho temporário onde o arquivo está armazenado no servidor
if (move_uploaded_file($arquivo_tmp, $destino)) {// "move_uploaded_file" tenta mover o arquivo da pasta temporária para o destino final(bd)
    echo "Arquivo <b><i>$arquivo</i></b> movido para a pasta <b>img/</b><br>";
    echo "<img src='$destino' width='25%' height='25%'><br><br>";
    $inserir = "INSERT INTO usuario (nome, email, fone, senha, foto)
            VALUES ('$nome', '$email', '$fone', '$senha', '$arquivo')";//sql para inserir no bd
 
    if (mysqli_query($bd, $inserir)) { // Executa o comando SQL
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($bd);
    }
} else {
    echo "Erro ao mover o arquivo.";
}
 
mysqli_close($bd);
     
    
?>
</body>
</html>