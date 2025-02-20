<?php
	if(!isset($_SESSION))
		session_start();
	var_dump($_SESSION);
 ?>
<!doctype html>
<html>
	<head>
		<title>Loja</title>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fs-4" aria-current="page" href="/lojaMVC/">Home</a>
        </li>
        <?php
          if(isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "Administrador"){
            
            echo"<li class='nav-item'>
            <a class='nav-link fs-4' href='/lojaMVC/categoria'>Categoria</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link fs-4' href='/lojaMVC/produto'>Produto</a>
            </li>";
          }
        ?>
        
      </ul>
	   <ul class="navbar-nav ms-auto">
	   
		
	   <li class="nav-item">
          <a class="nav-link" href="/lojamvc/mostrar_carrinho"><img src='imagens/carrinho.png'></a>
        </li>
    <?php
    if(!isset($_SESSION["perfil"]) )
    {
		echo"<li class='nav-item'>
          <a class='nav-link fs-4' href='/lojamvc/login'>Entrar</a>
        </li>";
    }
    else
    {
      echo"<li class='nav-item'>
      <a class='nav-link fs-4' href='/lojamvc/logout'>Sair</a>
      </li>";
    }
      ?>

	   </ul>
    </div>
  </div>
</nav>
	