<?php
	require_once "header.php";
?>
<div class="content">
<div class="container">
	<br><h2>Carrinho de Compras</h2><br><br>
	<?php
		if(isset($_SESSION["carrinho"]))
		{
	?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço(R$)</th>
				<th>Quantidade</th>
				<th>Subtotal</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$total = 0;
				foreach($_SESSION["carrinho"] as $linha =>$dado)
				{
					$subtotal = 0;
					$subtotal = $dado["preco"] * $dado["quantidade"];
					$total +=$subtotal;
					
					$preco = number_format($dado["preco"],2,",",".");
					$subtotal = number_format($subtotal,2,",",".");
					
					echo "<tr>
						  <td>{$dado['nome']}</td>
						  <td>{$preco}</td>
						  <td><input type='number' min='1' value='{$dado['quantidade']}' onchange = 'alterar(this)' linha='$linha'></td>
						  <td>$subtotal</td>
	<td><a href='/lojamvc/excluir_carrinho?linha=$linha'><img src='imagens/lixeira.png'></a></td>
						  </tr>";
				}
			?>
		</tbody>
		<tfoot>
			<?php
			$total = number_format($total, 2, ",",".");
				echo "<tr>
					  <td colspan='3'>Total</td>
					  <td colspan='2'>$total</td>
					  
					  </tr>";
			?>
		</tfoot>
	</table>
	<a class="btn btn-primary" href="/lojamvc/">Continuar Comprando</a>&nbsp;&nbsp;&nbsp;
	
	<?php
			if(count($_SESSION["carrinho"]) > 0)
			{
				echo "<a class='btn btn-primary' href='/lojamvc/finalizar_venda'>Finalizar a Compra</a>";
			}
		}
		else
		{
			echo "<br><br><h2>Não há produtos no carrinho</h2>";
		}
	?>
</div>
</div>
<script>
	function alterar(elemento)
	{
		var quant = elemento.value;
		
		var linha = elemento.getAttribute("linha");
		
		if(quant > 0)
		{
			var url = "/lojamvc/alterar_carrinho?quant=" + quant + "&linha=" + linha;
			fetch(url).then((response)=>{
				location.reload();
			});
		}
	}
</script>
</body>
</html>