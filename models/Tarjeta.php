<?php
namespace models;

require_once 'pago.php';

 class Tarjeta extends pago
 {
     public $numero;
     public $caducidad;
     public static $tipoTarjeta1 = 'Visa';
     public static $tipoTarjeta2 = 'MasterCard';
   
            

     public function __construct($importe, $numero, $caducidad)
     {
         parent::__construct($importe);
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
        'Importe' => parent::getImporte(),
        'Numero' => $this->getNumero(),
        'Caducidad' => $this->getCaducidad(), 
       
        ), JSON_PRETTY_PRINT);

     }
}
