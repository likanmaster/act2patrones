<?php

require_once 'models/cliente.php';
require_once 'models/DetalleOrden.php';
require_once 'models/pago.php';
require_once 'models/pedidos.php';
require_once 'models/Cheque.php';
require_once 'models/Efectivo.php';
require_once 'models/Producto.php';
require_once 'models/Tarjeta.php';

use models\Cliente;
use models\DetalleOrden;
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
$nuevoCheque = new Cheque(10000, 'David Mendez','Banco Estado');
echo "Cheque : <br>";
echo $nuevoCheque -> mostrar();
echo "<br>";
// Nuevo Cheque


// Nuevo Efectivo
$nuevoEfectivo = new Efectivo(10000,'Peso Chileno');
echo "Efectivo : <br>";
echo $nuevoEfectivo -> mostrar();
echo "<br>"; 
// Nuevo Efectivo

// Nuevo Detalle Orden
$nuevoDetalleorden = new DetalleOrden(4,15000,1900);
echo "Detalle Orden : <br>";
echo $nuevoDetalleorden -> mostrar();
echo "<br>"; 
// Nuevo Detalle Orden


// Nuevo Producto
$nuevoProducto = new Producto('Salmon','1kg',20);
echo "Producto : <br>";
echo $nuevoProducto -> mostrar();
echo $nuevoProducto -> FprecioCantidad();
echo "<br>"; 
// Tipo de Moneda



// Nuevo Tarjeta
$nuevoTarjeta = new Tarjeta(10000, 00001,'12/08/2023', 0 );
echo "Tarjeta : <br>";
echo $nuevoTarjeta -> mostrar();
echo "<br>"; 
// Nuevo Tarjeta


