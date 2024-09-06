<?php 
require 'db.php';

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function() {
    $('#clientes').DataTable();
});
</script>
</head>
<body>
  <?php include('navbar.php')?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
      <div class="card">
      <div class="card-header" style="border-radius: 10px;">
            <h4>Clientes cadastrados
            <a href="form_clientes.php" class="btn btn-primary float-end">Adicionar clientes</a>
            </h4>
          </div>
          <div class="card-body">
            <table id="clientes" class="table table-bordered table-striped">
             <thead>
    <tr>
      <th scope="col" style="text-align:center;">ID</th>
      <th scope="col" style="text-align:center;">NOME</th>
      <th scope="col" style="text-align:center;">TELEFONE</th>
      <th scope="col" style="text-align:center;">EMAIL</th>
      <th scope="col" style="text-align:center;">CEP</th>
      <th scope="col" style="text-align:center;">CPF</th>
      <th scope="col" style="text-align:center;">Opções</th>
    </tr>
  </thead>
  <tbody>
  <?php include 'get_clientes.php'; ?>

  </tbody>
  </table>
    </div>
</body>