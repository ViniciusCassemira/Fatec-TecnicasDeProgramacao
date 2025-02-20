<?php
require_once "header.php";
?>

<div class="content">
    <div class="container">
        <h1>Categorias</h1>
        <a href="/categoriaInserir" class="btn btn-primary">nova categoria</a>
        <table class="table table-striped">
            <tr>
                <th>Descritivo</th>
                <th>Ações</th>
            </tr>
            <?php
            foreach($retorno as $item){
                echo "<tr>
                        <td>{$item->descritivo}</td>
                        <td>
                          <a href='' class='btn btn-warning'>Alterar</a>&nbsp;&nbsp;
                          <a href='' class='btn btn-danger'>Excluir</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</div>
    
</body>
</html>