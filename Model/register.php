<?php
session_start();

// Conexão banco de dados
include_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_escape_string($connect, $_POST['email']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $senha = mysqli_escape_string($connect, md5($_POST['senha']));

    $sql = "INSERT INTO 
                usuarios 
                (nome, telefone, email, senha)
            VALUES
                ('$nome', '$telefone', '$email', '$senha')";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../admin/login.php?usuario-cadastrado');
    } else {
        header('Location: ../admin/cadastro.php?erro');
    }
}