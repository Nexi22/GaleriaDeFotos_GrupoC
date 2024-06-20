<?php

requiere_once 'App/ViewFotos/ViewFotos.php'; 
requiere_once  'App/ModelFotos/ModelFotos.php'; 

Class ControllerFotos{


     Private $ViewFotos;
     Private $ModelFotos; 

     Function __construct(){

        $this->viewFotos=new ViewFotos();
        $this->ModelFotos= new ModelFotos(); 



     }

     Function verFotos(){

        $fotos=$this->ModelFotos->verfotos(); 
        $this->viewFotos->verfotos(); 


            }
        }
     
