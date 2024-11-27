<?php
	require_once "header.php";
?>
<div class="content">
<div class="container">
	<br><br><h1>Categoria</h1><br>
	<form action="/lojaMVC/alterar_categoria" method="post">
		<input type="hidden" name="idcategoria" value="<?php echo $retorno[0]->id_categoria;?>">
		<label for="descritivo">Descritivo:</label>
		<input type="text" name="descritivo" id="descritivo" value="<?php echo $retorno[0]->descritivo; ?>">
		<div style="color:red;font-size:11px;"><?php echo $msg; ?></div>
		<br>
		<input type="submit" class="btn btn-primary">
	</form>
</div>
</div>
</body>
</html>