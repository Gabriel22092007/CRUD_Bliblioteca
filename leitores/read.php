<?php
require '../config.php';

$result = $conn->query("SELECT * FROM leitores");
while ($row = $result->fetch_assoc()) {
    echo $row['id_leitor'] . " - " . $row['nome'] . " (" . $row['email'] . ", " . $row['telefone'] . ")<br>";
}
?>
