<?php
require_once "pessoa.php";
require_once "telefone.php";
require_once "aluno.php";
require_once "professor.php";
require_once "disciplina.php";
require_once "notas.php";

//Aluno
$aluno = new Aluno("0123456789","Vinicius Cruz Cassemira",14,"99999-9999");
$aluno->setTelefone(11,"99999-0000");

//professor
$professor = new Professor("Doutora em tecnologia","Vânia",13,"99999-1234");

//disciplina
$disciplina = new Disciplina("Técnicas de Programação",12,$aluno,$professor);

//nota
$nota = new Notas(10,$disciplina);


//Mostrando os dados da Nota
echo "<h1>Fatec JAHU</h1>";

echo "<h3>Nota:</h3>";
echo "Valor da nota: {$nota->getNota()}";

echo "<h3>Disciplina</h3>";
echo "A qual disciplina a nota pertence: {$nota->getDisciplina()->getNome()}<br>";
echo "Carga horária da disciplina: {$nota->getDisciplina()->getCargaHoraria()}<br>";
echo "Professor que aplica a disciplina: {$nota->getDisciplina()->getProfessor()->getNome()}<br>";
echo "Qual aluno é dono da nota: {$nota->getDisciplina()->getAluno()->getNome()}";

echo "<h3>Informações do Professor em questão</h3>";
echo "Nome: {$nota->getDisciplina()->getProfessor()->getNome()}<br>";
echo "Título: {$nota->getDisciplina()->getProfessor()->getTitulacao()}<br>";
echo "<h4>Telefones</h4>";
foreach ($nota->getDisciplina()->getProfessor()->getTelefone() as $telefone) {
    echo "{$telefone->getDdd()} - {$telefone->getTelefone()}<br>";
}

echo "<h3>Informações do Aluno em questão</h3>";
echo "Nome: {$nota->getDisciplina()->getAluno()->getNome()}<br>"; 
echo "Ra: {$nota->getDisciplina()->getAluno()->getRa()}<br>";
echo "<h4>Telefones</h4>";
foreach ($nota->getDisciplina()->getAluno()->getTelefone() as $telefone) {
    echo "{$telefone->getDdd()} - {$telefone->getTelefone()}<br>";
}