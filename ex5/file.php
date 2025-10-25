<?php
$resultat='';
$preu =floatval($_GET['preu']);
$iva =intval($_GET['iva']);

if ($preu == false || $preu < 0) {
    $resultat = "Si us plau, introdueix un preu vàlid.";
} elseif (!in_array($iva, [4, 10, 21])){
    $resultat = "Si us plau, introdueix un tipus d'IVA vàlid.";
} else {
    $ivaquantitat = $preu * ($iva/100);
    $total = $preu + $ivaquantitat;

    $resultat = $total;
}
echo "<p> El teu preu total es: $resultat</p>";
?> 
,