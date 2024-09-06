<?php 
require ('db.php');
if (isset($_POST['excluir'])) {
    $id_servico = mysqli_real_escape_string($db_barbearia, trim($_POST['excluir']));
    $sql = "DELETE  FROM servicos where id = $id_servico";

    if (mysqli_query($db_barbearia, $sql)) {
        header('Location: tabela_servicos.php');
    } else {
        header('Location: tabela_servicos.php');
    }
}