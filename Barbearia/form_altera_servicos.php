<?php
require('db.php');
session_start();
 ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Edicação de Serviços</title>
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
                        $id_servico = mysqli_real_escape_string($db_barbearia, $_GET['id']);
                        $sql = "select * from servicos where id ='$id_servico'";
                        $query = mysqli_query($db_barbearia, $sql);

                        if (mysqli_num_rows($query) > 0) {
                            $servico = mysqli_fetch_array($query);
                        
                    ?>
                <form action="altera_servicos.php" method="POST">
                    <input type="hidden" name="id_servico" value="<?=$servico['id']?>">
                        <div class="mb-3">
                            <label>Tipo</label>
                            <input type="text" value="<?=$servico['tipo']?>" class="form-control" name="tipo">
                        </div>
                        <div class="mb-3">
                            <label>Preço</label>
                            <input type="text" value="<?=$servico['preco']?>" class="form-control" name="preco">
                        </div>
                        <div class="mb-3"> 
                        <button type="submit" class="btn btn-primary" name="save_servico">Salvar</button>
                        </div>
                    </div>
                    </form>
                    <?php 
                } else {
                    echo 'erro';
                }
            }
                    ?>
                                    </div>
                            </div>
                        
                    </body>
