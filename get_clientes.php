<?php 
require 'db.php';
$sql = "SELECT id, nome, telefone, email, cep, cpf FROM cliente";
$clientes = mysqli_query($db_barbearia, $sql);
if (mysqli_num_rows($clientes) > 0) {
    while ($cliente = mysqli_fetch_assoc($clientes)) {
        echo "<tr>";
        echo "  <td>".$cliente['id']."</td>";
        echo "  <td>".$cliente['nome']."</td>";
        if (empty($cliente['telefone'])) {
            echo "<td>Sem número registrado</td>";
        } else {
            echo "<td>".$cliente['telefone']."</td>";
        }
        echo "  <td>".$cliente['email']."</td>";
        echo "  <td>".$cliente['cep']."</td>";
        echo "  <td>".$cliente['cpf']."</td>";
        echo "  <td>
                    <a href='form_altera_clientes.php?id=".$cliente['id']."' class='btn btn-primary btn-sm'>Editar</a>&nbsp;&nbsp;&nbsp;
                    <form action='del_clientes.php' method='POST' style='display:inline;'>
                        <button type='submit' name='Excluir' value='".$cliente['id']."' class='btn btn-danger btn-sm'>Excluir</button>
                    </form>
                </td>";
        echo "</tr>";
    }
}
