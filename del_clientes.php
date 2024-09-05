<?php 
require 'db.php';
if (isset($_POST['Excluir'])) {
    $id_cliente = mysqli_real_escape_string($db_barbearia, $_POST['Excluir']);
    $sql = "DELETE from cliente where id = $id_cliente";
    if (mysqli_query($db_barbearia, $sql)) {
        header('Location: gerenciador_clientes.php');
    } else {
        echo "Erro ao excluir cliente: " . mysqli_error($db_barbearia);
    }
}

