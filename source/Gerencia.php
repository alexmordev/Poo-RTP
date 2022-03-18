<?php
require_once "IcrearPresupuesto.php";
Class Gerencia implements IcrearPresupuesto{
    private $nombre;
    protected $tipo;
    public $trabajadores;
    public $fondo;
    public function setFondo(int $fondo):void{
        $this->fondo=$fondo;
    }
    private function calcularEgreso(){
        
    }
    public function generarPresupuesto(int $ingreso,int $egreso){
        $presupuesto = ($ingreso-$egreso)+$this->fondo;
        return $presupuesto;
    }

}
