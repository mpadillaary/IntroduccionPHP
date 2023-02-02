<?php include 'includes/header.php';

$nombreCliente = 'Miguel Padilla';

//** Conocer extension de un string */
echo strlen($nombreCliente);
echo "<br/>";


//** Elminar espacios en blanco */
$texto = trim($nombreCliente);
var_dump($texto);

//** Convertir a mayusculas */
echo strtoupper($nombreCliente);

//** Convertir a minusculas */
echo strtolower($nombreCliente);

$mail1 = 'correo@correo.com';
$mail2 = 'Correo@correo.com';

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Miguel', 'M', $nombreCliente);

//** Revisar si un Str existe o no */

echo strpos($nombreCliente, 'ricardo');

$tipoCliente = 'Premium';

echo '<br/>';
echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;

echo '<br/>';
echo "El cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';