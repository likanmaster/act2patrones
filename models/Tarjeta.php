<?php
namespace models;

 class Cheque
 {
     public $numero;
     public $caducidad;
     public static $tipoTarjeta1 = 'Visa';
     public static $tipoTarjeta2 = 'MasterCard';
     
     public static function mostrarTipotarjeta()
        {
            echo $tipoTarjeta1;
            echo $tipoTarjeta2;
        }

        Cheque::mostrarTipotarjeta();

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
        return json_encode(array('nombre' => parent::getNombre(),
        'banco' => parent::getBanco(), 
        ), JSON_PRETTY_PRINT);

     }
}
