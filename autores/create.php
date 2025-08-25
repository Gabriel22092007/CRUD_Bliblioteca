<?php
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano = $_POST['ano_nascimento'];

    $sql = "INSERT INTO autores (nome, nacionalidade, ano_nascimento) VALUES ('$nome', '$nacionalidade', $ano)";
    if ($conn->query($sql)) {
        echo "Autor cadastrado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<form method="post">
    Nome: <input type="text" name="nome"><br>
    Nacionalidade: <input type="text" name="nacionalidade"><br>
    Ano de Nascimento: <input type="number" name="ano_nascimento"><br>
    <button type="submit">Cadastrar</button>
</form>