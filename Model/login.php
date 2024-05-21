<?php
session_start();

// Conexão banco de dados
include_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_login = mysqli_escape_string($connect, $_POST['email']);
    $password_login = mysqli_escape_string($connect, md5($_POST['password']));

    if( empty($email_login) || empty($password_login) ) {
        header('location: ../login.php?preencha-todos-os-campos');
    } else {
        // Veriricando se e-mail existe na tabela de usuários
        $sql = "SELECT email FROM usuarios WHERE email = '$email_login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0) {
            // verificando se a senha digitada é a mesma do usuário
            $sql = "SELECT * FROM usuarios WHERE email = '$email_login' AND senha = '$password_login'";
            $resultado = mysqli_query($connect, $sql);

            if( mysqli_num_rows($resultado) == 1 ) {
                /* O resultado da consulta $sql(se email e senha conferem) foi atribuida a variável $resultado.
                O mysqli_fetch_array vai converter o resultado em um array e atribuir a variável dados. */
                $dados = mysqli_fetch_array($resultado);

                // Criando sessões depois de atribuir $resultado em fetch(transformando em array)
                $_SESSION['logado'] = true;
                $_SESSION['id_user'] = $dados['id'];

                // redirecionar usuário para página restrita
                header('Location: ../admin/appointment/index.php?logado');
            } else {
                header('Location: ../admin/login.php?usuario-e-senha-nao-confere');
            }
        } else {
            header('Location: ../admin/login.php?usuario-inexistente');
        }
    }
}