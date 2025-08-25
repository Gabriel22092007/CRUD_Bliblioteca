<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE leitores SET nome='$nome', email='$email', telefone='$telefone' WHERE id_leitor=$id";
    if ($conn->query($sql)) {
        echo "Leitor atualizado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID: <input type="number" name="id"><br>
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Telefone: <input type="text" name="telefone"><br>
    <button type="submit">Atualizar</button>
</form>
