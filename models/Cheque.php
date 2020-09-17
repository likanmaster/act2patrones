<?php
namespace models;

require_once 'pago.php';

use models\pago;

 class Cheque extends pago
 {
     public $nombre;
     public $banco;



     public function __construct($importe, $nombre, $banco)
     {
         parent::__construct($importe);
         $this->nombre = $nombre;
         $this->banco = $banco;
     }

     public function getNombre()
     {
         return $this->nombre;         
     }

     public function getBanco()
     {
        return $this->banco;
     }



     public function mostrar()
     {
        return json_encode(array(
        'Importe' => parent::getImporte(),
        'Nombre' => $this -> getNombre(),
        'Banco' => $this -> getBanco(), 
        ), JSON_PRETTY_PRINT);

     }
}
