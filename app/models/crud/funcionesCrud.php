<?php
//FUNCIONES CRUD REFUGIO
function insertRefugio($refugio):bool{
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertRefugio($refugio);
    
    return $insert;
}

//FUNCIONES CRUD USUARIO
function insertUser($user):bool{
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertUsu($user);
    
    return $insert;
}

//FUNCIONES CRUD ANIMALES
function insertAnimal($animal):bool{
    // Creo una nueva conexión e inserto el refugio en la BBDD
    $midb = AccesoDatos::getModelo();
    $insert=$midb->insertAnimal($animal);
    
    return $insert;
}

function getAnimal($microchip):Animal{
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
?>