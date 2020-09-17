<?php
namespace models;

require_once 'pago.php';

 class Tarjeta extends pago
 {
     public $numero;
     public $caducidad;    
     public $tipo;
              

     public function __construct($importe, $numero, $caducidad, $tipo)
     {
         parent::__construct($importe);
         $this->numero = $numero;
         $this->caducidad = $caducidad;   
         $this->tipo = $tipo;       
        
     }

     public function getTipo()
     {
         return $this->tipo = array("visa"=>"visa","mastercard"=>"mastercard");      
     }

     public function getNumero()
     {
         return $this->numero;         
     }

     public function getCaducidad()
     {
        return $this->caducidad;
     }

     public function autorizar()
     {
        return $this->caducidad;
     } 
  
     public function mostrar()
     {
        return json_encode(array(
        'Importe' => parent::getImporte(),
        'Numero' => $this->getNumero(),
        'Caducidad' => $this->getCaducidad(), 
        'Tipo' => $this -> getTipo(),
               
        ), JSON_PRETTY_PRINT);

     }
}
