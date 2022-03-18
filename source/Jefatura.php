<?php
require_once "Gerencia.php";
require_once "IcrearPresupuesto.php";

Class Jefatura extends Gerencia{
    public function generarPresupuesto(int $ingreso, int $egreso){
        $presupuesto = $ingreso-$egreso;
        return ( $presupuesto ===  0) ? 'Sin recursos': $presupuesto ;
    } 
    public function getTipo():string{
        return $this->tipo;
    }
    public function setTipo(string $tipo):void{
        $this->tipo=$tipo;
    }
}
