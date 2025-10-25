<?php
$hora = date("H"); 
$minuts = date("i"); 
$segons = date("s"); 

if ($hora >= 5 && $hora < 14) {
    $salutacio = "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    $salutacio = "Bona tarda";
} else {
    $salutacio = "Bona nit";
}

echo "<p>$salutacio! L'hora actual del servidor és $hora:$minuts:$segons.</p>";
?>