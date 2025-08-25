<?php
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano_publicacao'];
    $autor = $_POST['id_autor'];

    $sql = "INSERT INTO livros (titulo, genero, ano_publicacao, id_autor) 
            VALUES ('$titulo', '$genero', $ano, $autor)";
    if ($conn->query($sql)) {
        echo "Livro cadastrado!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="post">
    Título: <input type="text" name="titulo"><br>
    Gênero: <input type="text" name="genero"><br>
    Ano: <input type="number" name="ano_publicacao"><br>
    ID Autor: <input type="number" name="id_autor"><br>
    <button type="submit">Cadastrar</button>
</form>
