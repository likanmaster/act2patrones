<?php
namespace models;

 class Cheque
 {
     public $nombre;
     public $banco;



     public function __construct($nombre, $banco)
     {
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
        return json_encode(array('nombre' => $this -> getNombre(),
        'banco' => $this -> getBanco(), 
        ), JSON_PRETTY_PRINT);

     }
}
