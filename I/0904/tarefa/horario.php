<?php

class horario{
    public function __construct(
        private string $data = "",
        private string $hora = ""
    ){}

    public function setData($data){
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }
    public function getHora(){
        return $this->hora;
    }
}