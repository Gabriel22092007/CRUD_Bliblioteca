<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM leitores WHERE id_leitor=$id";
    if ($conn->query($sql)) {
        echo "Leitor removido!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID do Leitor: <input type="number" name="id"><br>
    <button type="submit">Deletar</button>
</form>
