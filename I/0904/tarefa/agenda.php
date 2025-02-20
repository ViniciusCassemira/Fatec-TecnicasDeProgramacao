<?php

class Agenda{
    public function __construct(
        private int $ano = 0
    ){}

    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno(){
        return $this->ano;
    }
}