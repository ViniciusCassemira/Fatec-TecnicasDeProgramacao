<?php
	require_once "Pessoa.class.php";
	require_once "Publicacoes.class.php";
	require_once "Livro.class.php";
	require_once "Genero.class.php";
	require_once "Aluno.class.php";
	require_once "Emprestimo.class.php";
	require_once "Itens.class.php";
	require_once "Autor.class.php";
	require_once "Editora.class.php";
	//aluno
	$aluno = new Aluno("12345", "Paulo Costa");
	//generos
	$genero1 = new Genero("Ação");
	$genero2 = new Genero("Suspense");
	$genero3 = new Genero("Aventura");
	$genero4 = new Genero("Infantil");
	//autores
	$autor1 = new Autor("Brasileira",array(), "João Carvalho");
	$autor2 = new Autor(nacionalidade:"Alemã",nome:"Jacob Grimm");
	$autor3 = new Autor(nacionalidade:"Alemã", nome:"Wilhelm Grimm");
	//editora
	$editora1 = new Editora("23.123.123/0001-22", "Atlas"); 
	//livros
	$livro1 = new Livro("Maria vai com as outras e foge", "123456b", array($genero1, $genero2), array($autor1), "12/01/1999" , "Maria vai", $editora1);
	
	$livro2 = new Livro("João e Maria se perdem na floresta", "121212b", array($genero3, $genero4), array($autor2, $autor3), "12/01/1812" , "João e Maria", $editora1);
	//emprestimo
	$emprestimo = new Emprestimo("07/10/2024",$aluno, "11/10/2024",$livro1);
	
	$emprestimo->setItens("10/10/2024", $livro2);
	
	//mostrando os dados do Emprestimo
	
	echo "<h3>Empréstimo de Livros</h3>";
	
	echo "Data do Empréstimo: {$emprestimo->getData_emprestimo()}<br>";
	
	echo "Aluno: {$emprestimo->getAluno()->getNome()} - Ra: {$emprestimo->getAluno()->getRa()}<br>";
	
	echo "<h4>Livros</h4>";
	$cont = 0;
	foreach($emprestimo->getItens() as $item)
	{
		$cont++;
		echo "<h5>Livro$cont</h5>";
		echo "Título: {$item->getLivro()->getTitulo()} - ISBN: {$item->getLivro()->getIsbn()}<br>";
		echo "Sinopse: {$item->getLivro()->getSinopse()}<br>";
		echo "Editora: {$item->getLivro()->getEditora()->getNome()} - CNPJ: {$item->getLivro()->getEditora()->getCnpj()}<br>";
		echo "Data da Publicação: {$item->getLivro()->getData_publicacao()} <br>";
		echo "<h5>Gêneros</h5>";
		foreach($item->getLivro()->getGenero() as $genero)
		{
			echo "Gênero: {$genero->getDescritivo()}<br>";
		}
		echo "<h5>Autores</h5>";
		foreach($item->getLivro()->getAutor() as $autor)
		{
			echo "Nome: {$autor->getNome()} - Nacionalidade: {$autor->getNacionalidade()}<br>";
		}
		echo "<br>";
	}
	/*echo "<pre>";
	var_dump($emprestimo);
	echo "</pre>";*/
?>