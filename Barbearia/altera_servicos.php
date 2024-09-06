<?php 
require ("db.php");
if (isset($_POST['save_servico'])) {
    $id_servico =  mysqli_real_escape_string($db_barbearia, trim($_POST['id_servico']));
    $tipo = mysqli_real_escape_string($db_barbearia, trim($_POST['tipo']));
    $preco = mysqli_real_escape_string($db_barbearia, trim($_POST['preco']));

    $sql = "UPDATE servicos SET tipo='".$tipo."' , preco='".$preco."' where id = '".$id_servico."'";

    mysqli_query($db_barbearia, $sql);

    if (mysqli_affected_rows($db_barbearia) > 0 ) {
        header('Location: tabela_servicos.php');
    } else {
        header('Location: tabela_servicos.php');
    }
}