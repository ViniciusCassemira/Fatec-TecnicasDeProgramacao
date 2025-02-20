<?php
	require_once "header.php";
?>
<div class="content">
<div class="container">
	<br><br><h1>Categoria</h1><br>
	<form action="/lojaMVC/inserir_categoria" method="post">
		<label for="descritivo">Descritivo:</label>
		<input type="text" name="descritivo" id="descritivo">
		<div style="color:red;font-size:11px;"><?php echo $msg; ?></div>
		<br>
		<input type="submit" class="btn btn-primary">
	</form>
</div>
</div>
</body>
</html>