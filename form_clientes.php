<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formulário de Clientes</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container mt-4">
    <form >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email"  placeholder="lucas@exemplo.com">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
    </div>