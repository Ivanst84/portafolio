<?php
session_start();
class Conectar{

  public $dbh;
  public function Conexion(){
    try {
        /*TODO: Cadena de Conexion QA*/
        $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=portafolio","root","");
        /*TODO: Cadena de Conexion Produccion*/
        return $conectar;
    } catch (Exception $e) {
        /*TODO: En Caso hubiera un error en la cadena de conexion */
        print "¡Error BD!: " . $e->getMessage() . "<br/>";
        die();
    }
}

/*TODO: Para impedir que tengamos problemas con las ñ o tildes */
public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
}

/*TODO: Ruta principal del proyecto */
public static function ruta(){
    //QA
    return "http://localhost";
    //Produccion
}

}



?>