<?php

class Notas{
    public function __construct(
        private float $nota = 0.0,
        private $disciplina = null
    ){

    }

    public function getNota(){
        return $this->nota;
    }
    public function setNota($nota){
        $this->nota = $nota;
    }
    
    public function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }
    public function getDisciplina(){
        return $this->disciplina;
    }
}