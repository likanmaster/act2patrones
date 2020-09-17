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
        return $this->tipoMoneda;         
     }

     public function mostrar()
     {
        return json_encode(array(
            'Tipo Moneda' => $this->getTipomoneda(),       
       
        ), JSON_PRETTY_PRINT);

     }

}
