<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM autores WHERE id_autor=$id";
    if ($conn->query($sql)) {
        echo "Autor removido!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<form method="post">
    ID do Autor: <input type="number" name="id"><br>
    <button type="submit">Deletar</button>
</form>
