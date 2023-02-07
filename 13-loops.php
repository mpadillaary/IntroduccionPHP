<?php include 'includes/header.php';

//** while */

$i = 0; //** incremento */

while($i < 10) {
    
    echo $i . "<br>";

    $i++; //** incremento */
}

echo "<br>";
//** do while */

$i = 0;

do {
    echo $i . "<br>";

    $i++;

} while ($i < 10);

include 'includes/footer.php';