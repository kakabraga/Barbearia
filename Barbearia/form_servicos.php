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
                <h4 style="text-align: center;">
                    Cadastro de Serviços
                    <a href="tabela_servicos.php" class="btn btn-primary float-end">Voltar para tabela de servicos</a>
                </h4>
                <div class="card-body">
                <form action="save_servicos.php" method="POST">
                        <div class="mb-3">
                            <label>Tipo</label>
                            <input type="text" class="form-control" name="tipo">
                        </div>
                        <div class="mb-3">
                            <label>Preço</label>
                            <input type="text" class="form-control" name="preco">
                            </div>
                        <button type="submit" class="btn btn-primary" name="save_servicos">Salvar</button>
                        </div>
                    </div>
                    </form>
                    </div>
                            </div>
                        
                    </body>

