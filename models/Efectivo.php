<?php
namespace models;

require_once 'pago.php';
use models\pago;

 class Efectivo extends pago
 {
     public $tipoMoneda;

     
     public function __construct($importe, $tipoMoneda)
     {
        parent::__construct($importe);
        $this->tipoMoneda = $tipoMoneda;
         
     }

     public function getTipomoneda()
     {
        return $this->tipoMoneda;         
     }

     public function mostrar()
     {
        return json_encode(array(
            'Importe' => parent::getImporte(),
            'Tipo Moneda' => $this->getTipomoneda(),       
       
        ), JSON_PRETTY_PRINT);

     }

}
