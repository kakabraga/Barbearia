<?php
session_start();
require 'db.php';
if (isset($_POST['save_cliente'])) {
    $nome = mysqli_real_escape_string($db_barbearia, trim($_POST['nome']));
    $telefone = mysqli_real_escape_string($db_barbearia, trim($_POST['telefone']));
    $cep = mysqli_real_escape_string($db_barbearia, trim($_POST['cep']));
    $email = mysqli_real_escape_string($db_barbearia, trim($_POST['email']));
    $cpf = mysqli_real_escape_string($db_barbearia, trim($_POST['cpf']));

    $sql = "INSERT INTO cliente (nome, telefone, cep, email, cpf) values ('$nome', '$telefone', '$cep', '$email', '$cpf')";

    mysqli_query($db_barbearia, $sql);
    
    if (mysqli_affected_rows($db_barbearia) >= 0) {
        header('Location: gerenciador_clientes.php');
    }
}