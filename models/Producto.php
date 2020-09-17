<?php
namespace models;

require_once 'DetalleOrden.php';

use models\DetalleOrden;

class Producto extends DetalleOrden
{
    public $producto;
    public $peso;
    public $stock;
    public $precioCantidad;
    
    public function __construct($producto, $peso, $stock)
    {
      // parent::__construct($cantidad,$precio);
       $this->producto = $producto;  
       $this->peso = $peso;  
       $this->stock = $stock;     
           
    }

    public function getProducto()
    {
       return $this->producto;         
    }

    public function getPeso()
    {
       return $this->peso;         
    }

    public function getStock()
    {
       return $this->stock;         
    }

    public function Preciocantidad()
    {
         
         return ($this -> precioCantidad = parent::getPrecio());  
    }
    
    
    public function mostrar()
    {
       return json_encode(array(
           'Producto' => $this->getProducto(),   
           'Peso' => $this->getPeso(),
           'Stock' => $this->getStock(),       
       ), JSON_PRETTY_PRINT);

    }

    public function FprecioCantidad()
    {
       return json_encode(array(
           'PrecioCantidad' => parent::getPrecio(),   
                 
       ), JSON_PRETTY_PRINT);

    }

}
