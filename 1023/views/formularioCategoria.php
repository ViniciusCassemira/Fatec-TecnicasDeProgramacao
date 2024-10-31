<?php
require_once "header.php";
?>

<div class="content">
    <div class="container">
    <h1>form</h1>
    <form action="/categoriaInserir" method="post">
        <label for="descritivo">Categoria</label>
        <input type="text" id="descritivo" name="descritivo">
        <div style="color: red;"><?php echo $msg;?></div>
        <br>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
    </div>
</div>
    
</body>
</html>