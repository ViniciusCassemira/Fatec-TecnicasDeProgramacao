<?php

class Emprestimo{
    public function __construct(
        private string $dataEmprestimo = "",
        private $aluno = null,
        $livro = null,
        string $dataDevolucao = "",
        private $itens = []
    ){
        $this->itens[] = new Itens($livro,$dataEmprestimo);
    }
    
    public function setDataEmprestimo($dataEmprestimo){
        $this->dataEmprestimo = $dataEmprestimo;
    }
    public function getDataEmprestimo(){
        return $this->dataEmprestimo;
    }

    public function setAluno($aluno){
        $this->aluno = $aluno;
    }
    public function getAluno(){
        return $this->aluno;
    }

    public function setItens($livro = null, string $dataDevolucao = ""){
        $this->itens[] = new Itens($livro,$dataDevolucao);
    }
    public function getItens(){
        return $this->itens;
    }
}