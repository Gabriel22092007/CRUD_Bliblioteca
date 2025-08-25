<?php
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO leitores (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    if ($conn->query($sql)) {
        echo "Leitor cadastrado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Telefone: <input type="text" name="telefone"><br>
    <button type="submit">Cadastrar</button>
</form>
