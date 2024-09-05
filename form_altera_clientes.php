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
                <form action="altera_clientes.php" method="GET">
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
                                    </div>
                            </div>
                        
                    </body>
