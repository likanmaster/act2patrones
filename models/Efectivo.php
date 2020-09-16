<?php
namespace models;

 class Efectivo
 {
     public $tipoMoneda;

     
     public function __construct($tipoMoneda)
     {
         $this->tipoMoneda = $tipoMoneda;
         
     }

     public function getTipomoneda()
     {
         return $this->getTipomoneda;         
     }

     public function mostrar()
     {
        return json_encode(array('tipo moneda' => parent::getTipomoneda()       
       
    ), JSON_PRETTY_PRINT);

     }
}
