<?php 
require("db.php");

if(isset($_POST['save_cliente'])) {
    $id_cliente = mysqli_real_escape_string($db_barbearia, trim($_POST['id_cliente']));
    $telefone = mysqli_real_escape_string($db_barbearia, trim($_POST['telefone']));
    $nome = mysqli_real_escape_string($db_barbearia, trim($_POST['nome']));
    $cep = mysqli_real_escape_string($db_barbearia, trim($_POST['cep']));
    $email = mysqli_real_escape_string($db_barbearia, trim($_POST['email']));
    $cpf = mysqli_real_escape_string($db_barbearia, trim($_POST['cpf']));
    $sql = "UPDATE cliente set nome='".$nome."', cep='".$cep."' , email='".$email."' , telefone= '".$telefone."' , cpf='".$cpf."' where id = '".$id_cliente."'";

    mysqli_query($db_barbearia, $sql);

    if (mysqli_affected_rows($db_barbearia) >0) {
        header('Location: gerenciador_clientes.php');
    } else {
        header('Location: gerenciador_clientes.php');
    }
}

