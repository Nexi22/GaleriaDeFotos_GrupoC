<?php

require_once ('App/ViewFotos/ViewFotos.php');
require_once  ('App/ModelFotos/modelFotos.php'); 

Class ControllerFotos{


     Private $ViewFotos;
     Private $ModelFotos; 

     Function __construct(){

        $this->viewFotos=new ViewFotos();
        $this->ModelFotos= new ModelFotos(); 



     }

     Function verFotos(){

        $fotos=$this->ModelFotos->datos_de_tabla_de_fotos(); 
        $this->viewFotos->verfotos(); 


            }
        }
     
        Function eliminarFoto($id){

            $fotos=$this->ModelFotos->eliminarFoto($id);
            
        }
