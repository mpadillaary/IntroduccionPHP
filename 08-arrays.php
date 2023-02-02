<?php include 'includes/header.php';

//** Arreglos indexados */
$carrito = ['Tablet', 'Televisión', 'Computadora'];

//** util para ver los contenidos de un array */
echo '<pre>'; //**Revisar los elementos */
var_dump($carrito[2]);
echo '</pre>';

echo $carrito[1];

//** Añade un elemento al aggreglo en su indice 3 */ */
$carrito[3] = 'Nuevo Producto...';

//** Añadir elemento nuevo al final */

array_push($carrito, 'Audifonos');

//** Añadir elemento al inicio */
array_unshift($carrito,'Smartwatch');


echo '<pre>'; 
var_dump($carrito);
echo '</pre>';



include 'includes/footer.php';