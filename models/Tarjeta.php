<?php
namespace models;

 class Tarjeta
 {
     public $numero;
     public $caducidad;
     public static $tipoTarjeta1 = 'Visa';
     public static $tipoTarjeta2 = 'MasterCard';
   
            

     public function __construct($numero, $caducidad)
     {
         $this->numero = $numero;
         $this->caducidad = $caducidad;
        
     }

     public function getNumero()
     {
         return $this->numero;         
     }

     public function getCaducidad()
     {
        return $this->caducidad;
     }

   



     public function mostrar()
     {
        return json_encode(array(
        'Numero' => $this->getNumero(),
        'Caducidad' => $this->getCaducidad(), 
       
        ), JSON_PRETTY_PRINT);

     }
}
