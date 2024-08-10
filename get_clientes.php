<?php 
require 'db.php';

$sql = "SELECT id, nome, telefone, email, cep, cpf FROM cliente";
$clientes = mysqli_query($db_barbearia, $sql);

if (mysqli_num_rows($clientes) > 0) {
    foreach($clientes as $cliente) {
        echo"<tr>";
        echo"<td>" .$cliente['id']. "</td>";
        echo"<td>" .$cliente['nome']. "</td";
        echo"<td>" .$cliente['telefone']. "</td";
        echo"<td>" .$cliente['email']. "</td";
        echo"<td>" .$cliente['cep']. "</td";
        echo"<td>" .$cliente['cpf']. "</td";
        echo"</tr>";
    }
}