<?php
    include '../conecta.php';

    $ra = $_GET['ra'];


    $consulta = $conexao -> prepare("DELETE FROM emprestimo_devolucao WHERE ra=$ra");

    $consulta -> execute();



    $consulta = $conexao -> prepare("DELETE FROM aluno WHERE ra=$ra");

    $consulta -> execute();


    header('Location: index.php');

?>