<?php

require_once 'models/cliente.php';
require_once 'models/detalle_orden.php';
require_once 'models/pago.php';
require_once 'models/pedidos.php';

use models\Cliente;
use models\Detalle_orden;
use models\Pago;
use models\Pedidos;

//nuevo cliente
$nuevocliente = new cliente('Antonio', 'calle 123 dentro');
echo "cliente : <br>";
echo $nuevocliente->mostrar();
echo "<br>";
//nuevo cliente

