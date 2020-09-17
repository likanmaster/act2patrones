<?php
namespace models;

class Producto
{
    public $producto;
    public $peso;
    public $stock;
    
    public function __construct($producto, $peso, $stock)
    {
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
    
    
    public function mostrar()
    {
       return json_encode(array(
           'Producto' => $this->getProducto(),   
           'Peso' => $this->getPeso(),
           'Stock' => $this->getStock(),       
       ), JSON_PRETTY_PRINT);

    }

}
