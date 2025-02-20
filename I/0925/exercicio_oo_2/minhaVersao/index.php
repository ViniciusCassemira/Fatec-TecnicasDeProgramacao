<?php
require_once "pessoa.php";
require_once "aluno.php";
require_once "autor.php";
require_once "editora.php";
require_once "publicacoes.php";
require_once "livro.php";
require_once "revista.php";
require_once "genero.php";
require_once "emprestimo.php";
require_once "itens.php";

$genero1 = new Genero("Guerra");
$genero2 = new Genero("Educação");

$aluno = new Aluno("0201392411017","Vinicius Cruz");

$autor1 = new Autor("Chinês",array(),"Sun Tsu");

$editora1 = new Editora("001002-003","Edibook");

$livro1 = new Livro("01-02-1200","A arte da guerra","Um manual de como vencer tudo","123456",array($genero1,$genero2),array($autor1),$editora1);

$emprestimo = new Emprestimo("01/10/2024",$aluno,$livro1,"08/10/2024");

echo "<h3>Empréstimo de Livros</h3>";
	
	echo "Data do Empréstimo: {$emprestimo->getDataEmprestimo()}<br>";
	
	echo "Aluno: {$emprestimo->getAluno()->getNome()}<br>"; 
    echo "Ra: {$emprestimo->getAluno()->getRa()}<br>";
	
	echo "<h3>Livros</h3>";
	foreach($emprestimo->getItens() as $item){   
        echo "<h4>Livro</h4>";
		echo "Título: {$item->getLivro()->getTitulo()}<br>"; 
        echo "ISBN: {$item->getLivro()->getIsbn()}<br>";
		echo "Sinopse: {$item->getLivro()->getSinopse()}<br>";
		echo "Editora: {$item->getLivro()->getEditora()->getNome()} - CNPJ: {$item->getLivro()->getEditora()->getCnpj()}<br>";
		echo "Data da Publicação: {$item->getLivro()->getDataPublicacao()} <br>";
		echo "<h5>Gêneros</h5>";
		foreach($item->getLivro()->getGenero() as $genero)
		{
			echo $genero->getDescritivo() . "<br>";
		}
		echo "<h4>Autores</h4>";
		foreach($item->getLivro()->getAutor() as $autor)
		{
            echo "Nome: " . $autor->getNome() . "<br>Nacionalidade: {$autor->getNacionalidade()}<br>";
		}
		echo "<br>";
    }
