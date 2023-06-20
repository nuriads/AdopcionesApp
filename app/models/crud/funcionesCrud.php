<?php

//FUNCIONES CRUD REFUGIO
function insertRefugio($refugio):bool{
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertRefugio($refugio);
    
    return $insert;
}

function getRefugio($email){
    // Creo una nueva conexión
    $midb = AccesoDatos::getModelo();
    $ref=$midb->getRefugio($email);
    return $ref;
}
//MODIFICAR REFUGIO 
function guardarcambiosRef($refugio):bool{
 // Creo una nueva conexión
 $midb = AccesoDatos::getModelo();

    
 return true;
}

//FUNCIONES CRUD USUARIO
function insertUser($user):bool{
    // Creo una nueva conexión e inserto el usuario en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertUsu($user);
    
    return $insert;
}

function getUser($email){
    // Creo una nueva conexión
    $midb = AccesoDatos::getModelo();
    $user=$midb->getUsuario($email);
    return $user;
}
//Checkeo que el usuario y la contraseña son correctos y si está haciendo login un refugio o un usuario
function userOk($email,$clave,$rol){
    $ok=false;
      // Creo una nueva conexión
      $midb = AccesoDatos::getModelo();
      //Compruebo si es refugio o usuario normal para consultar en una tabla o en otra
      if($rol=='usuario'){
        $user=$midb->getUsuario($email);
      }else if($rol=='refugio'){
        $user=$midb->getRefugio($email);
      }
     
    if($user!=false){
           //Compruebo si la contraseña que ha introducido el usuario($clave) es igual a la contraseña de la BBDD (la que ahora está en el objeto usuario $user->contrasena)
        if($user->contrasena!=$clave){
            $ok=false;  
        }else{
            $ok=true;  
        }
    }
    return $ok;
}
//MODIFICAR REFUGIO 
function guardarcambiosUser($refugio):bool{
    // Creo una nueva conexión
    $midb = AccesoDatos::getModelo();
   
       
    return true;
   }
//Devuelve el rol, y si no está el email en la BBDD devuelve una cadena vacía
function getUserRol($email){
    $rol='';
      // Creo una nueva conexión
      $midb = AccesoDatos::getModelo();
      //Cojo el usuario de la BBDD o falso si no está el usuario
      $user=$midb->getUsuario($email);

    //Si el usuario devuelve falso miro si el usuario está el la tabla de refugios
    if($user==false){
        $user=$midb->getRefugio($email);
        //Si el usuario es distinto de false es que es un refugio
        if($user!=false){
            $rol='refugio';
        }
    }else{
       $rol='usuario';

    }
    return $rol;
}
//FUNCIONES CRUD ANIMALES
function insertAnimal($animal):bool{
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertAnimal($animal);
    
    return $insert;
}

function getAnimal($microchip){
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $animal=$midb->getAnimal($microchip);
    
    return $animal;
}

function getAnimales($especie){
    $midb = AccesoDatos::getModelo();
    $array_animales=$midb->getAnimales($especie);
    return $array_animales;
}

function getAnimalesRefugio($refugio){
    $midb = AccesoDatos::getModelo();
    $array_animales=$midb->getAnimalesRefugio($refugio);
    return $array_animales;
}

function randomAnimals(){
    $midb = AccesoDatos::getModelo();
    //Almaceno todos los animales de la BBDD en un array
    $array_animales=$midb->getallAnimals();
    $array_carrusel=[];
    //Genero  6 números aleatorios
    for($i=0;$i<=8;$i++){
        $num=random_int (0,count($array_animales)-1);
        //Compruebo que no se repita el animal
        if($i!=0){
            for ($j=0;$j<=$i-1;$j++){
                if( $array_carrusel[$j]->microchip==$array_animales[$num]->microchip){
                    $num=random_int (0,count($array_animales)-1);
                    $j--;
                }
            }
        }    
        // Añado el animal que está en la posición $num del array 
        $array_carrusel[]=$array_animales[$num];
    }
    return $array_carrusel;
}

function getallAnimales(){
    $midb = AccesoDatos::getModelo();
    $array_animales=$midb->getallAnimals();
    return $array_animales;
}

//FUNCIONES DE SESSION
?>