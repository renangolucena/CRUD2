<?php

    include '../conecta.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['select'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $qtdeExemplares = $_POST['qtdeExemplares'];

    //echo $tel;

    $consulta = $conexao -> prepare("INSERT INTO livros (titulo,autor,genero,editora,paginas,qtdeExemplares) VALUES ('$titulo','$autor','$genero','$editora','$paginas','$qtdeExemplares')");

    $consulta -> execute();

    header('Location: index.php');

?>