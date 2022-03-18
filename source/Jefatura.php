<?php
require_once "Gerencia.php";

Class Jefatura extends Gerencia{
    public function getTipo():string{
        return $this->tipo;
    }
    public function setTipo(string $tipo):void{
        $this->tipo=$tipo;
    }
}