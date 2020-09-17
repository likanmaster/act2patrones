<?php

require_once 'models/cliente.php';
require_once 'models/detalle_orden.php';
require_once 'models/pago.php';
require_once 'models/pedidos.php';
require_once 'models/Cheque.php';
require_once 'models/Efectivo.php';
require_once 'models/Producto.php';
require_once 'models/Tarjeta.php';

use models\Cliente;
use models\Detalle_orden;
use models\Pago;
use models\Pedidos;
use models\Cheque;
use models\Efectivo;
use models\Producto;
use models\Tarjeta;

//nuevo cliente
$nuevocliente = new cliente('Antonio', 'calle 123 dentro');
echo "cliente : <br>";
echo $nuevocliente->mostrar();
echo "<br>";
//nuevo cliente

// Nuevo Cheque
$nuevoCheque = new Cheque('David Mendez','Banco Estado');
echo "Cheque : <br>";
echo $nuevoCheque -> mostrar();
echo "<br>";
// Nuevo Cheque


// Tipo de Moneda
$nuevoEfectivo = new Efectivo('Peso Chileno');
echo "Efectivo : <br>";
echo $nuevoEfectivo -> mostrar();
echo "<br>"; 
// Tipo de Moneda


// Nuevo Producto
$nuevoProducto = new Producto('Salmon','1kg',20);
echo "Producto : <br>";
echo $nuevoProducto -> mostrar();
echo "<br>"; 
// Tipo de Moneda



// Nuevo Tarjeta
$nuevoTarjeta = new Tarjeta(00001,'12/08/2023');
echo "Tarjeta : <br>";
echo $nuevoTarjeta -> mostrar();
echo "<br>"; 
// Tipo Tarjeta


//Tarjeta::mostrarTarjeta1();
   //  $nuevoTarjeta = new Tarjeta;
    // $nuevoTarjeta->mostrarTarjeta1(00001,'12/08/2023');
