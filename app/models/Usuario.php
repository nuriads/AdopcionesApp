<?php
class Usuario {

private $email;
private $nombre;
private $apellidos;	
private $nick;	
private $contrasena;
private $intereses;



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