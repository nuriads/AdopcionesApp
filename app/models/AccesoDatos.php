<?php
/*
 * Acceso a datos con BD Usuarios : 
 * Usando la librería PDO *******************
 * Uso el Patrón Singleton :Un único objeto para la clase
 * Constructor privado, y métodos estáticos 
 */
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWD','');
define('DATABASE','adopciones');
class AccesoDatos {
    
    private static $modelo = null;
    private $dbh = null;
    
    public static function getModelo(){
        if (self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }
    
    

   // Constructor privado  Patron singleton
   
    private function __construct(){
        try {
            $dsn = "mysql:host=".DB_SERVER.";dbname=".DATABASE.";charset=utf8";
            $this->dbh = new PDO($dsn,DB_USER,DB_PASSWD);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }  

    }

    // Cierro la conexión anulando todos los objectos relacioanado con la conexión PDO (stmt)
    public static function closeModelo(){
        if (self::$modelo != null){
            $obj = self::$modelo;
            // Cierro la base de datos
            $obj->dbh = null;
            self::$modelo = null; // Borro el objeto.
        }
    }

      // Evito que se pueda clonar el objeto. (SINGLETON)
      public function __clone()
      { 
          trigger_error('La clonación no permitida', E_USER_ERROR); 
      }
  


/*
    // UPDATE USUARIO
    public function modUsu($usu):bool{
      
        $stmt_moduser   = $this->dbh->prepare("update Clientes set first_name=:first_name,last_name=:last_name".
        ",email=:email,gender=:gender, ip_address=:ip_address,telefono=:telefono WHERE id=:id");
        $stmt_moduser->bindValue(':first_name', $usu->first_name);
        $stmt_moduser->bindValue(':last_name'   ,$usu->last_name);
        $stmt_moduser->bindValue(':email'       ,$usu->email);
        $stmt_moduser->bindValue(':gender'      ,$usu->gender);
        $stmt_moduser->bindValue(':ip_address'  ,$usu->ip_address);
        $stmt_moduser->bindValue(':telefono'    ,$usu->telefono);
        $stmt_moduser->bindValue(':id'          ,$usu->id);

        $stmt_moduser->execute();
        $resu = ($stmt_moduser->rowCount () == 1);
        return $resu;
    }
*/

    //INSERT USUARIO
    public function insertUsu($user):bool{
       
        // El id se define automáticamente por autoincremento.
        $stmt_crearuser  = $this->dbh->prepare(
            "INSERT INTO `usuario`( `email`, `nombre`, `apellidos`, `nick`, `contrasena`, `intereses`)".
            "Values(?,?,?,?,?,?)");
        $stmt_crearuser->bindValue(1,$user->email);
        $stmt_crearuser->bindValue(2,$user->nombre);
        $stmt_crearuser->bindValue(3,$user->apellidos);
        $stmt_crearuser->bindValue(4,$user->nick);
        $stmt_crearuser->bindValue(5,$user->contrasena);
        $stmt_crearuser->bindValue(6,$user->intereses);    
        $stmt_crearuser->execute();
        $resu = ($stmt_crearuser->rowCount () == 1);
        return $resu;
    }

    //INSERT REFUGIO
    public function insertRefugio($refugio):bool{
       
        $stmt_crearRef  = $this->dbh->prepare(
            "INSERT INTO `refugio`( `nif`, `nom_refugio`, `direccion`, `telefono`, `email`, `contrasena`)".
            "Values(?,?,?,?,?,?)");
        $stmt_crearRef->bindValue(1,$refugio->nif);
        $stmt_crearRef->bindValue(2,$refugio->nom_refugio);
        $stmt_crearRef->bindValue(3,$refugio->direccion);
        $stmt_crearRef->bindValue(4,$refugio->telefono);
        $stmt_crearRef->bindValue(5,$refugio->email);
        $stmt_crearRef->bindValue(6,$refugio->contrasena);    
        $stmt_crearRef->execute();
        $resu = ($stmt_crearRef->rowCount () == 1);
        return $resu;
    }

    //DELETE 
    /*,public function borrarCliente(int $id):bool {


        $stmt_boruser   = $this->dbh->prepare("delete from Clientes where id =:id");

        $stmt_boruser->bindValue(':id', $id);
        $stmt_boruser->execute();
        $resu = ($stmt_boruser->rowCount () == 1);
        return $resu;
        
    }  */


    //INSERT ANIMAL
    public function insertAnimal($animal): bool
    {
        $stmt_crearAnimal  = $this->dbh->prepare(
            "INSERT INTO `animal`( `microchip`, `nif_refugio`, `especie`, `raza`, `nombre`, `sexo`,`fecha_nac`,`tamano`,`peso`)" .
            "Values(?,?,?,?,?,?,?,?,?)"
        );
        $stmt_crearAnimal->bindValue(1, $animal->microchip);
        $stmt_crearAnimal->bindValue(2, $animal->nif_refugio);
        $stmt_crearAnimal->bindValue(3, $animal->especie);
        $stmt_crearAnimal->bindValue(4, $animal->raza);
        $stmt_crearAnimal->bindValue(5, $animal->nombre);
        $stmt_crearAnimal->bindValue(6, $animal->sexo);
        $stmt_crearAnimal->bindValue(7, $animal->fecha_nac);
        $stmt_crearAnimal->bindValue(8, $animal->tamano);
        $stmt_crearAnimal->bindValue(9, $animal->peso);
        $stmt_crearAnimal->execute();
        $resu = ($stmt_crearAnimal->rowCount() == 1);
        return $resu;
    }
    // SELECT ANIMAL Devuelvo un animal o false
    public function getAnimal (string $microchip):Animal {
        $animal = false;
        $stmt_animal   = $this->dbh->prepare("select * from animal where microchip=:microchip");
        $stmt_animal->setFetchMode(PDO::FETCH_CLASS, 'animal');
        $stmt_animal->bindParam(':microchip', $microchip);
        if ( $stmt_animal->execute() ){
             if ( $obj = $stmt_animal->fetch()){
                $animal= $obj;
            }
        }
        return $animal;
    }

    // SELECT Devuelvo la lista de todos Animales en la BBDD
    public function getallAnimals ():array {
        $tanimals = [];
        // Crea la sentencia preparada
        $stmt_animales  = $this->dbh->prepare("select * from animal");
       
        $stmt_animales->setFetchMode(PDO::FETCH_CLASS, 'animal');
    
        if ( $stmt_animales->execute() ){
            while ( $animal = $stmt_animales->fetch()){
               $tanimals[]= $animal;
            }
        }
        // Devuelvo el array de objetos
        return $tanimals;
    }

     // SELECT ANIMAL Devuelvo un animal o false
     public function getAnimales (string $especie){
        $array_animales = [];
        $stmt_animal   = $this->dbh->prepare("select * from animal where especie=:especie");
        $stmt_animal->setFetchMode(PDO::FETCH_CLASS, 'animal');
        $stmt_animal->bindParam(':especie', $especie);
        if ( $stmt_animal->execute() ){
            while ( $animal = $stmt_animal->fetch()){
               $array_animales[]= $animal;
            }
        }

        // Devuelvo el array de animales
        return $array_animales;
    }
}
