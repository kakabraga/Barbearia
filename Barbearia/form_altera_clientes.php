<?php
require('db.php');
session_start();
 ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Clientes</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>
                    Cadastro de Clientes
                </h4>
                <a href="gerenciador_clientes.php" class="btn btn-primary">Voltar para tabela de clientes</a>
                <div class="card-body">
             <?php
                if (isset($_GET['id'])) {         
                    $id_cliente = mysqli_real_escape_string($db_barbearia, $_GET['id']);   
                    $sql = "SELECT * FROM cliente where id = '$id_cliente'";
                    $query = mysqli_query($db_barbearia, $sql);

                    if (mysqli_num_rows($query) > 0) {
                        $cliente = mysqli_fetch_array($query);
             ?>
                <form action="altera_clientes.php" method="POST">
                    <input type="hidden" name="id_cliente" value="<?=$cliente['id']?>">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" value="<?=$cliente['nome']?>" class="form-control" name="nome">
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="text" value="<?=$cliente['telefone']?>" class="form-control" name="telefone">
                        </div>
                        <div class="mb-3">
                            <label>CEP</label>
                            <input type="number" value="<?=$cliente['cep']?>"  class="form-control" name="cep" >
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" value="<?=$cliente['email']?>"  class="form-control" name="email" placeholder="lucas@exemplo.com">
                        </div>
                        <div class="mb-3">
                            <label>CPF</label>
                            <input type="number" value="<?=$cliente['cpf']?>" class="form-control" name="cpf">
                        </div>
                        <div class="mb-3"> 
                        <button type="submit" class="btn btn-primary" name="save_cliente">Salvar</button>
                        </div>
                    </div>
                    </form>
                    <?php 
                } else {
                    echo 'nao foi';
                }
                }
                    ?>
                                    </div>
                            </div>
                        
                    </body>
