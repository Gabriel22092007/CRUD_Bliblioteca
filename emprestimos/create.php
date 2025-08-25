<?php
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $livro = $_POST['id_livro'];
    $leitor = $_POST['id_leitor'];
    $dataEmp = $_POST['data_emprestimo'];
    $dataDev = $_POST['data_devolucao'] ?: "NULL";

    $sql = "INSERT INTO emprestimos (id_livro, id_leitor, data_emprestimo, data_devolucao) 
            VALUES ($livro, $leitor, '$dataEmp', " . ($dataDev == "NULL" ? "NULL" : "'$dataDev'") . ")";
    if ($conn->query($sql)) {
        echo "Empréstimo cadastrado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    ID Livro: <input type="number" name="id_livro"><br>
    ID Leitor: <input type="number" name="id_leitor"><br>
    Data Empréstimo: <input type="date" name="data_emprestimo"><br>
    Data Devolução (opcional): <input type="date" name="data_devolucao"><br>
    <button type="submit">Cadastrar</button>
</form>
