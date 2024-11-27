<?php
	require_once "header.php";
?>
<div class="content">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<?php
				foreach($retorno as $dado)
				{
					echo "<li class='nav-item'>
						  <a class='nav-link fw-bold'  href='/lojamvc/produtos_categoria?idcategoria={$dado->id_categoria}'>{$dado->descritivo}</a>
						  </li>";
				}
			?>
	</ul>
 </div>
 </div>
 </nav>
 <br><div class="container" id="container">
 <div class="text-center mb-4">
 <?php
 
 if(isset($_GET["msg"]))
	 echo "<div id='alert' class='alert alert-success' role='alert'>
			<strong>{$_GET['msg']}</strong>					 </div>";
	
?>
</div>
	<div id="produtos" class="d-flex justify-content-around align-items-center">
		<?php
			
			foreach($produtos as $produto)
			{
				$preco = number_format($produto->preco, 2, ",", ".");
				echo "<div class='card' style='width: 18rem;'>
				<img src='produtos/{$produto->imagem}' class='card-img-top' alt='{$produto->nome}'>
				<div class='card-body'>
				<h5 class='card-title'>{$produto->nome} - R$ $preco</h5>
				<a href='/lojamvc/inserir_carrinho?id={$produto->id_produto}' class='btn btn-primary'>Comprar</a>
				</div>
				</div>";
			}
		?>
	</div>
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		
		$(document).ready(function(){			
			setTimeout(function() {
				$("#alert").fadeOut("slow", function(){
					$(this).alert('close');
					
				});				
			}, 3000);			
		});
	</script>

</body>
</html>