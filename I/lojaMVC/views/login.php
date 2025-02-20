<?php
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
	 <?php
		if($mensagem != "")
		{
		  echo "<div class='alert alert-danger' role='alert'>
			$mensagem;
		  </div>";
		}
	  ?>
		<br>
		<h1>Login</h1>
		<br><br>
		<form action="/lojamvc/login" method="post">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email">
			<div style="color:red;font-size:10px;"><?php echo $msg[0];?></div>
			<br><br>
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha">
			<div style="color:red;font-size:10px;"><?php echo $msg[1];?></div>
			<br><br>
			
			 <a href="/lojamvc/inserir_usuario">Primeiro Acesso</a>
			 <br><br>
			<input type="submit" value="Enviar">
		</form>
	</div>
   </div>
</body>
</html>