<?php
require '../config.php';

$sql = "SELECT e.id_emprestimo, l.titulo, r.nome as leitor, e.data_emprestimo, e.data_devolucao 
        FROM emprestimos e
        JOIN livros l ON e.id_livro = l.id_livro
        JOIN leitores r ON e.id_leitor = r.id_leitor";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['id_emprestimo'] . " - Livro: " . $row['titulo'] . " - Leitor: " . $row['leitor'] . 
         " - Empréstimo: " . $row['data_emprestimo'] . " - Devolução: " . ($row['data_devolucao'] ?: "Em aberto") . "<br>";
}
?>
