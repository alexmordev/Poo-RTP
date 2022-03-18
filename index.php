<?php
/**
 * git clone link =>clonar repositorio
 * git branch  => listar ramas.
 * git status => estatus de la rama actual.
*/
require_once "./source/Jefatura.php";
require_once "./source/Gerencia.php";

$gMantenimiento= new Gerencia();
$gMantenimiento->setFondo(500);
echo $gMantenimiento->generarPresupuesto(2000,500);


// $jefatura1 = new Jefatura();
// echo $jefatura1->generarPresupuesto(1000,1000);

// $jefaturaPYSS = 
// var_dump($jefatura);

class Pato{
    /**
     * vuela = velocidad
     * nada = distancia
     * cuack = sonido
     */
}

interface velocidad{

}

interface distancia{
    
}

interface sonido{
    
}

class patoPlastico extends Pato{
    /**
     * vuela = 0 
     * nada = distancia
     * cuack = sonido
     */
}
