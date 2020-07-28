<?php

    include '../conecta.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = $_POST['select'];

    //echo $nascimento;

    $consulta = $conexao -> prepare("INSERT INTO aluno (nome,turma,tel,email,celular,dataNascimento) VALUES ('$nome','$turma','$tel','$email','$celular','$nascimento')");

    $consulta -> execute();

    header('Location: index.php');

?>