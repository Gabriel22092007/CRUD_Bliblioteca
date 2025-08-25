<?php
require '../config.php';

$sql = "SELECT l.id_livro, l.titulo, l.genero, l.ano_publicacao, a.nome as autor 
        FROM livros l 
        JOIN autores a ON l.id_autor = a.id_autor";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['id_livro'] . " - " . $row['titulo'] . " (" . $row['genero'] . ", " . $row['ano_publicacao'] . ") - Autor: " . $row['autor'] . "<br>";
}
?>
