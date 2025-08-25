<?php
require '../config.php';
$result = $conn->query("SELECT * FROM autores");

while ($row = $result->fetch_assoc()) {
    echo $row['id_autor'] . " - " . $row['nome'] . " (" . $row['nacionalidade'] . ", " . $row['ano_nascimento'] . ") <br>";
}
?>
