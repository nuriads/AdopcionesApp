<?php
class Animal {

    private $microchip;
    private $nif_refugio;
    private $especie;	
    private $raza;	
    private $nombre;
    private $sexo;
    private $fecha_nac;
    private $tamano;
    private $peso;
    

    
    function __set($name, $value)
   {
    if ( property_exists($this,$name)){
        $this->$name = $value;
    }
   }

   function &__get($name)
   {
       if ( property_exists($this,$name)){
           return $this->$name;
       }
   }

}