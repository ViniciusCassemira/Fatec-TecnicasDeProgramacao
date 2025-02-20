<?php
    if($_GET){
        //outras rotas 
        http://localhost:8000/index.php?controle=usuarioController&metodo=listar
        $controle = $_GET["controle"];
        $metodo =$_GET["metodo"];
        require_once "controllers/" . $controle . ".php";
        $obj = new $controle();
        $obj->$metodo();
    }else{   
        //rota inicial http://localhost:8000/index.php
        require_once "controllers/inicioController.php";
        $obj = new inicioController();
        $obj->inicio();
    }
?>