<?php
	require_once "header.php";
	if(!isset($_SESSION["perfil"]) || $_SESSION["perfil"] !== "Administrador")
	{
		header("Location:/lojamvc/");
		die();
	}
?>
<div class="content">
<div class="container">
	<?php
		if(isset($_GET["msg"]))
		{
			echo "<div class='alert alert-success' role='alert'>{$_GET["msg"]}</div>";
				
		}
	?>
	<br><h1>Categorias</h1>
	<a href="/lojaMVC/inserir_categoria" class="btn btn-primary">Nova Categoria</a>
	<table class="table table-striped">
		<tr>
			<th>Descritivo</th>
			<th>Ações</th>
		</tr>
		<?php
			foreach($retorno as $dado)
			{
				echo "<tr>
				      <td>{$dado->descritivo}</td>
					  <td>
						  <a href='/lojamvc/alterar_categoria?id={$dado->id_categoria}' class='btn btn-warning'>Alterar</a>
						  &nbsp;&nbsp;";
			
			
		?>
		<a href="/lojamvc/excluir_categoria?id=<?php echo $dado->id_categoria?>" class="btn btn-danger" onclick="return confirm('Confirma a exclusão')">Excluir</a>
		</td>
		</tr>
		<?php
			}
		?>
	</table>
</div>
</div>
</body>
</html>