<?php 
require 'db.php';

// Query para selecionar os dados dos clientes
$sql = "SELECT id, nome, telefone, email, cep, cpf FROM cliente";
$clientes = mysqli_query($db_barbearia, $sql);

// Verifica se há resultados
if (mysqli_num_rows($clientes) > 0) {
    // Loop através de cada cliente
    while ($cliente = mysqli_fetch_assoc($clientes)) {
        echo "<tr>";
        echo "  <td>".$cliente['id']."</td>";
        echo "  <td>".$cliente['nome']."</td>";
        // Verifica se o telefone está vazio
        if (empty($cliente['telefone'])) {
            echo "<td>Sem número registrado</td>";
        } else {
            echo "<td>".$cliente['telefone']."</td>";
        }
        echo "  <td>".$cliente['email']."</td>";
        echo "  <td>".$cliente['cep']."</td>";
        echo "  <td>".$cliente['cpf']."</td>";
        // Link para visualizar e botão para excluir
        echo "  <td>
                    <a href='form_altera_clientes.php?id=".$cliente['id']."' class='btn btn-primary btn-sm'>Visualizar</a>&nbsp;&nbsp;&nbsp;
                    <form action='del_clientes.php' method='POST' style='display:inline;'>
                        <button type='submit' name='Excluir' value='".$cliente['id']."' class='btn btn-danger btn-sm'>Excluir</button>
                    </form>
                </td>";
        echo "</tr>";
    }
}
?>
