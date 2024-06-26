<?php
require_once "app/model/Model.php";

class ModelFotos extends Model
{ 
function datos_fotos()
    { 

        $db = $this->createConexion();


        $sentencia = $db->prepare("SELECT * FROM tabla_de_fotografias");
        $sentencia->execute();
        $vuelos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $vuelos;
    }
    function eliminar_fotos($id)
    {
        $db = $this->createConexion();
        $eliminado = $db->prepare("DELETE FROM tabla_de_fotografias WHERE ID = ?");
        $eliminado->execute([$id]); // ejecuta
    }
}