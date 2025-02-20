<?php
	require_once "Pessoa.class.php";
	require_once "Aluno.class.php";
	require_once "Telefone.class.php";
	require_once "Instrutor.class.php";
	require_once "Aparelho.class.php";
	require_once "Treino.class.php";
	
	$instrutor = new Instrutor("Fisicultura", "Paulo", "123.123.123-23", 14, "99876266");
	
	//$aluno = new Aluno(restricoes:"Problema  cardiaco",data_nascimento: "21/01/1959",nome:"Pedro", cpf:"333.333.333-33", ddd:14, numero:"98888888");
	
	$aluno = new Aluno("Problema  cardiaco", "21/01/1959", array(),"Pedro", "333.333.333-33", 14, "98888888");
	
	$aparelho = new Aparelho("Supino");
	
	$treino = new Treino(3, 20, $instrutor, $aluno,$aparelho);
	
	//mostrar os dados do treino sem usar var_dump
	echo "<h3>Treino</h3>";
	
	echo "Nome Aluno: {$treino->getAluno()->getNome()}<br>";
	echo "CPF Aluno: {$treino->getAluno()->getCpf()}<br>";
	
	echo "<h4>Telefones do Aluno</h4>";
	
	foreach($treino->getAluno()->getTelefone() as $telefone)
	{
		echo "Telefone: ({$telefone->getDdd()}) - {$telefone->getNumero()}<br>";
	}
	
	echo "<br>Restrições: {$treino->getAluno()->getRestricoes()}<br>";
	
	echo "Data de Nascimento: {$treino->getAluno()->getData_nascimento()}<br>";
	
	//instrutor
	echo "Nome Instrutor: {$treino->getInstrutor()->getNome()}<br>";
	echo "CPF Instrutor: {$treino->getInstrutor()->getCpf()}<br>";
	
	echo "<h4>Telefones do Instrutor</h4>";
	
	foreach($treino->getInstrutor()->getTelefone() as $telefone)
	{
		echo "Telefone: ({$telefone->getDdd()}) - {$telefone->getNumero()}<br>";
	}
	
	echo "<br>Especialidade: {$treino->getInstrutor()->getEspecialidade()}<br>";
	
	echo "<h4>Aparelho</h4>";
	
	echo "Aparelho: {$treino->getAparelho()->getDescritivo()}<br>";
	
	echo "Series: {$treino->getSeries()} - Repetições: {$treino->getRepeticoes()}<br>";
	
	
	
	
	
	
	
	
?>