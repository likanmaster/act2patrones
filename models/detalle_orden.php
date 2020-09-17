<?php
namespace models;
require_once 'pedidos.php';
/**
 * Cliente
 */
 class Detalle_orden extends Pedidos
{
    public $cantidad;
    public $precio;
    public $impuesto;
    
   
    /**
     * __construct
     * @param  mixed $cantidad
     * @param  mixed $precio
     * @param  mixed $impuesto
     * @return void
     */
    public function __construct($cantidad,$precio,$impuesto)
    {
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->impuesto = $impuesto;
    }



    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getImpuesto()
    {
        return $this->impuesto;
    }






    public function CalcularSubTotal()
    {
        return $this->nombre;
    }
   
   
   
    
    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar()
    {
        return json_encode(array('cantidad' =>  $this->getCantidad(),
            'precio' =>  $this->getPrecio(),
            'impuesto' =>  $this->getImpuesto(),
            ), JSON_PRETTY_PRINT);
    }
  
}
