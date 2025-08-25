<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $livro = $_POST['id_livro'];
    $leitor = $_POST['id_leitor'];
    $dataEmp = $_POST['data_emprestimo'];
    $dataDev = $_POST['data_devolucao'] ?: "NULL";

    $sql = "UPDATE emprestimos SET id_livro=$livro, id_leitor=$leitor, data_emprestimo='$dataEmp', data_devolucao=" 
           . ($dataDev == "NULL" ? "NULL" : "'$dataDev'") . " WHERE id_emprestimo=$id";
    if ($conn->query($sql)) {
        echo "Empréstimo atualizado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID: <input type="number" name="id"><br>
    ID Livro: <input type="number" name="id_livro"><br>
    ID Leitor: <input type="number" name="id_leitor"><br>
    Data Empréstimo: <input type="date" name="data_emprestimo"><br>
    Data Devolução (opcional): <input type="date" name="data_devolucao"><br>
    <button type="submit">Atualizar</button>
</form>
