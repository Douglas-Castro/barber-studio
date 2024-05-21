<?php
require_once '../../Model/connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: ../login.php?voce-nao-esta-logado');
}
