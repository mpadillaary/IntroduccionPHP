<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Miguel',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo '<pre>'; 
var_dump($cliente['nombre']);
echo '</pre>';

// echo $cliente['nombre'];
// echo $cliente['informacion']['tipo'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 1234565465;

echo '<pre>'; 
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';