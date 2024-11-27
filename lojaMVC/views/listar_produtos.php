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
	<br><h1>Produtos</h1>
	<a href="/lojaMVC/inserir_produto" class="btn btn-primary">Novo Produto</a>
	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>Preço</th>
			<th>Categoria</th>
			<th>Situação</th>
			<th>Ações</th>
		</tr>
		<?php
			foreach($retorno as $dado)
			{
				$preco = number_format($dado->preco,2, ",", ".");
				echo "<tr>
				      <td>{$dado->nome}</td>
					  <td>$preco</td>
					  <td>{$dado->descritivo}</td>
					  <td>{$dado->situacao}</td>
					  <td>
						  <a href='/lojamvc/alterar_produto?id={$dado->id_produto}' class='btn btn-warning'>Alterar</a>
						  &nbsp;&nbsp;";
						  if($dado->situacao == "Ativa")
						  {
							  //inativar
							  echo "<a href='/lojamvc/alterar_situacao?idproduto={$dado->id_produto}&situacao=Inativa' class='btn btn-warning'>Inativar</a>";
						  }
						  else
						  {
							  //ativar
							  echo "<a href='/lojamvc/alterar_situacao?idproduto={$dado->id_produto}&situacao=Ativa' class='btn btn-warning'>Ativar</a>";
						  }
			
		
						  echo "</td></tr>";
					}//fim foreach
		?>
	</table>
</div>
</div>
</body>
</html>