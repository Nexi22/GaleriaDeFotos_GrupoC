<?php

require_once ('App/ViewFotos/ViewFotos.php');
require_once  ('App/ModelFotos/modelFotos.php'); 

Class ControllerFotos{


     Private $View;
     Private $Model; 

     Function __construct(){

        // $this->viewFotos=new ViewFotos();
        $this->Model= new ModelFotos(); 



     }

     Function Fotos(){

        $fotos=$this->Model->datos_de_tabla_de_fotos(); 
        // $this->viewFotos->verfotos(); 


            } 
            Function DeleteFoto($id){

         $this->Model->eliminarfotos($id);
            
        }
        }
     
      
      
