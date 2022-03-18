<?php

/**
 * Abstraccion
 * Encapsulamiento
 * Herencia
 * Polimorfismo
 */

/**
 * RTP
 * 
 * camiones.
 * gerencias
 * rutas
 * trabajadores
 * 
 */

Class Rtp{
    public $camiones;
    public $gerencias;
    public $rutas;
    public $trabajadores;
    public $jefaturas;
    public $pais;

    public function __construct(int $camiones, 
                                int $gerencias, 
                                int $rutas, 
                                int $trabajadores,
                                string $pais,
                                int $jefaturas=0)
    {
        $this->camiones = $camiones;
        $this->gerencias = $gerencias;
        $this->rutas = $rutas;
        $this->trabajadores = $trabajadores;
        $this->pais = $pais;
        $this->jefaturas = $jefaturas;
    }
}


//instancia u objeto
// $rtp = new Rtp(2000,20,500,4000,'MX',80);
// $rtpHonduras = new Rtp(20,1,1,50,'HN');
// $rtp->gerencias = 5;
// echo "<pre>";
// var_dump($rtp);
