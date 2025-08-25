<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM livros WHERE id_livro=$id";
    if ($conn->query($sql)) {
        echo "Livro removido!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID do Livro: <input type="number" name="id"><br>
    <button type="submit">Deletar</button>
</form>
