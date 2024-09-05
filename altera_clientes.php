<?php 
require("db.php");

if(isset($_GET['id'])) {
    $id_cliente = mysqli_real_escape_string($db_barbearia, trim($_GET['id']));
    $telefone = mysqli_real_escape_string($db_barbearia, trim($_GET['telefone']));
    $nome = mysqli_real_escape_string($db_barbearia, trim($_GET['nome']));
    $cep = mysqli_real_escape_string($db_barbearia, trim($_GET['cep']));
    $email = mysqli_real_escape_string($db_barbearia, trim($_GET['email']));
    $cpf = mysqli_real_escape_string($db_barbearia, trim($_GET['cpf']));
    $sql = "UPDATE cliente set nome='".$nome."', cep='".$cep."' , email='".$email."' , telefone= '".$telefone."' , cpf='".$cpf."' where id = '".$id_cliente."'";

    mysqli_query($db_barbearia, $sql);

    if (mysqli_affected_rows($db_barbearia) >0) {
        header('Location: gerenciador_clientes.php');
    } else {
        echo "Erro ao editar cliente: " . mysqli_error($db_barbearia);
    }
}


if (isset($_GET['id'])) {
    $cliente_id = mysqli_real_escape_string($db_barbearia, $_GET['id']);
    $sql = "select * from cliente where id ='$cliente_id'";
    $query = mysqli_query($db_barbearia, $sql);

    if (mysqli_num_rows($query) > 0 ) {
        $cliente = mysqli_fetch_array($query);
    } else {
        echo 'erro';
    } 
}