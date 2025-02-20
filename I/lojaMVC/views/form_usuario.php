<?php
	require_once "header.php";
	
?>

	<div class="content">
		<div class="container">
		
		   <h1>Usuário</h1>
		   <br>
           <form action="/lojamvc/inserir_usuario" method="post">
		   <label style="color:#2c3e50;">Nome:</label>
			 <input type="text" name="nome" style="height:30px;width:250px;" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
			 <div style='color:red;font-size:11px'><?php echo $msg[0]?></div>
			 <br><br>
			 <label style="color:#2c3e50;">E-mail:</label>
			 <input type="email" name="email" style="height:30px;width:250px;" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>">
			 <div style='color:red;font-size:11px'><?php echo $msg[1]?></div>
			 <br><br>
			 <label>Senha:</label>
			 <input type="password" name="senha" style="height:30px;width:250px;">
			 <div style='color:red;font-size:11px'><?php echo $msg[2]?></div>
			 <br><br>
			 <label>Confirma a Senha:</label>
			 <input type="password" name="confirma" style="height:30px;width:250px;">
			 <div style='color:red;font-size:11px'><?php echo $msg[3]?></div>
			 <br><br>
			 <input type="submit" value="Enviar">
		   </form>
		  
        </div>
   </div>

</body>
</html>