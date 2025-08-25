<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM emprestimos WHERE id_emprestimo=$id";
    if ($conn->query($sql)) {
        echo "Empréstimo removido!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID do Empréstimo: <input type="number" name="id"><br>
    <button type="submit">Deletar</button>
</form>
