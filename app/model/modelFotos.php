<?php
require_once "app/model/Model.php";

class ModelFotos extends Model
{ 
function datos_de_tabla_de_fotos()
    { 

        $db = $this->createConexion();


        $sentencia = $db->prepare("SELECT * FROM aerolineas_argentinas");
        $sentencia->execute();
        $vuelos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $vuelos;
    }
}