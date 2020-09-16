<?php
namespace models;

/**
 * Cliente
 */
abstract class Pago
{
    public $importe;
    
    
    
    /**
     * __construct
     * @param  mixed $importe
     * @return void
     */
    public function __construct($importe)
    {
        $this->importe = $importe;
    
    }
    
 
  
}
