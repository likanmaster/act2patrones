<?php
namespace models;

/**
 * Cliente
 */
abstract class Pedidos
{
    public $fecha;
    public $estado;
    
    
    /**
     * __construct
     * @param  mixed $fecha
     * @param  mixed $estado
     * @return void
     */
    public function __construct($fecha, $estado)
    {
        $this->fecha = $fecha;
        $this->estado = $estado;

    }
    public function CalcularTotal()
    {
        return $this->nombre;
    }
    public function Mostrar()
    {
        return $this->Direccion;
    }
   
   
    
    /**
     * mostrar
     *
     * @return void
     */
    
  
}
