<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, Inicia sesión";
};

echo "</br>";

//** if anidados */
$cliente = [
    'nombre' => 'Miguel',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

// if(empty($cliente)){
//     echo "El arreglo de cliente esta vacio";
// } else {
//     echo "El arreglo de cliente no esta vacio";
// };

if(!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";
    echo "</br>";

    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "</br>";

//** else if */
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "No hay cliente definido";
}

//** switch */
echo "<br>";

$tecnologia = 'JavaScript';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "JavaScript, el lenguaje de la web";
        break;
    default:
        echo "Algun lenguaje diferente";
        break;
}
include 'includes/footer.php';