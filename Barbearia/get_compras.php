<?php
require ('db.php');

$sql = "SELECT 
    cp.id, 
    cp.data_compra, 
    c.nome AS nome,  -- Exibe o nome do cliente em vez do id_cliente
    s.tipo as tipo, 
    s.preco as preco,
    fp.forma as forma
FROM 
    compras AS cp
JOIN 
    cliente AS c on cp.id_cliente = c.id
JOIN 
    servicos as s on cp.id_servico = s.id
JOIN 
    forma_pagamento as fp on cp.id_forma_pagamento = fp.id";

$compras = mysqli_query($db_barbearia, $sql);

if (mysqli_num_rows($compras) > 0) {
    while ($compra = mysqli_fetch_assoc($compras)) {
        echo "<tr>";
        echo"<td>".$compra['id']."</td>";
        echo"<td>".$compra['nome']."</td>";
        echo"<td>".$compra['tipo']."</td>";
        echo"<td>".$compra['preco']."</td>";
        echo"<td>".$compra['forma']."</td>";
        echo"<td>".$compra['data_compra']."</td>";
    }
}