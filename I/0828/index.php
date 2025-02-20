<?php
    require_once "Cliente.php";
    $cliente = new Cliente();
    $conect = $cliente->conexao();
    $resultado = $cliente->buscarTodosClientes($conect);
    /*echo "<pre>";
    var_dump($resultado);
    echo "</pre>";*/
    if($_GET){
        echo $_GET["msg"];
    }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <a href="formCliente.html">Novo cliente</a>
        <br>
        <table border=1>
            <thead>
                <tr>
                    <th>nome</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($resultado as $dado){
                        echo "<tr>
                              <td>{$dado->nome} {$dado->sobrenome}
                              </td>
                              <td>{$dado->cpf}</td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>