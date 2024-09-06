<?php
require ('db.php');
session_start();

if (isset($_POST['save_servicos'])) {
    $tipo = mysqli_real_escape_string($db_barbearia, trim($_POST['tipo']));
    $preco = mysqli_real_escape_string($db_barbearia, trim($_POST['preco']));

    $sql = "insert into servicos (tipo, preco) values('$tipo' , '$preco')";

    mysqli_query($db_barbearia, $sql); 

    if (mysqli_affected_rows($db_barbearia) > 0) {
        header('Location: tabela_servicos.php');
    }

}