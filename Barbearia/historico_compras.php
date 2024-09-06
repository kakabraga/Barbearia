<?php 
require ('db.php');
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Historico de Compras</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
            <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#compras').DataTable();
                });
            </script>
            </head>
            <body>
                <?php include('navbar.php')?>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Histórico de Compras
                                        <a href='form_compra.php' class='btn btn-primary btn-sm float-end' style='border-radius: 5px;'>Registrar Compra</a></td>"
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table id="compras" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CLIENTE</th>
                                                <th>SERVIÇO</th>
                                                <th>PREÇO</th>
                                                <th>FORMA DE PAGAMENTO</th>
                                                <th>DATA E HORA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include ('get_compras.php') ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
</html>