<?php include 'includes/header.php';

//** in_array = buscar elementos en un arreglo */
$carrito = ['Tablet', 'Computadora', 'Televisión'];


var_dump(in_array('Audifonos', $carrito));
var_dump(in_array('Tablet', $carrito));
echo '<br/>';

//** Ordenar elementos de un arreglo */
$numeros = [1,2,5,7,3,7,9,7,10];
sort($numeros); //** de menor a mayor */
rsort($numeros); //** de mayor a menor */

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//** Ordernar arreglo asociativo */
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Miguel'
);

asort($cliente); //** asort ordena por valores */
arsort($cliente); //** Ordena por valores (Z primero) */
ksort($cliente); //** ksort ordena por llaves (orden alfabetico) */
krsort($cliente); //** Ordena por llaves (orden alfabetico, De la z a la a) */

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';