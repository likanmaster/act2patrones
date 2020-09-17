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
    public function getFecha()
    {
        return $this->fecha;         
    }
    public function getEstado()
    {
        return $this->estado;         
    }
    public function CalcularTotal()
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
       return json_encode(array('fecha' => $this -> getFecha(),
       'estado' => $this -> getEstado(), 
       ), JSON_PRETTY_PRINT);

    }
   
   
    
    /**
     * mostrar
     *
     * @return void
     */
    
  
}
