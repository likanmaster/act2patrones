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
    public function CalcularSubTotal()
    {
        return $this->nombre;
    }
    public function Mostrar()
    {
      
    }
   
   
    
    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar()
    {
        return json_encode(array('nombre' => parent::getNombre(),
            'run' => parent::getRun(),
            'email' => parent::getEmail(),
            'edad' => parent::getEdad(),
            'sueldoLiquido' => $this->calcularSueldoLiquido(),
            'categoria' => $this->getCategoria(),
        ), JSON_PRETTY_PRINT);
    }
  
}
