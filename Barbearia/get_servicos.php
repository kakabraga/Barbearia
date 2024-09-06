<?php
require ('db.php');

$sql = "SELECT id, tipo, preco from servicos";
$servicos = mysqli_query($db_barbearia, $sql);

if (mysqli_num_rows($servicos) > 0) {
    while ($servico = mysqli_fetch_assoc($servicos)) {
        echo "<tr>";
        echo "<td>".$servico['id']."</td>";
        echo "<td>".$servico['tipo']."</td>";
        echo "<td>".$servico['preco']."</td>";
        echo "<td> 
                <a href='form_altera_servicos.php?id=".$servico['id']."' class='btn btn-primary btn-sm'>Editar</a>&nbsp;&nbsp;&nbsp;
                <form action='del_servico.php' method='POST' style='display:inline;'>
                <button type='submit' name='excluir' value='".$servico['id']."' class='btn btn-danger btn-sm'>Excluir</button>&nbsp;&nbsp;&nbsp;
                </form>
                <a href='form_servicos.php' class='btn btn-primary btn-sm float-end' style='border-radius: 5px;'>Adicionar Serviço</a></td>";
        echo "</tr>";
    }
}