<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Clientes</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container mt-4">
        <div class="row">
    <form action="save_clientes.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefone</label>
        <input type="number" class="form-control" name="telefone">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CEP</label>
        <input type="number" class="form-control" name="cep" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="lucas@exemplo.com">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CPF</label>
        <input type="number" class="form-control" name="cpf">
    </div>
    <div class="mb-3"> 
    <button type="submit" class="btn btn-primary" name="save_cliente">Enviar</button>
    </div>
</form>
</body>
</div>
</div>