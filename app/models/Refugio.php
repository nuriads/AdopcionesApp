<?php
class Refugio{
    private $nif;
    private $nom_refugio;
    private $direccion;	
    private $telefono;	
    private $email;
    private $contrasena;
    

    
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
?>