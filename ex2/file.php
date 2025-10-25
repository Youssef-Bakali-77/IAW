<?php
$quantitat = $_GET["quantitat"];
$conversio = $_GET["conversio"];

$euros_a_dolars = 1.08;
$dolars_a_euros = 0.93; 

if ($conversio == "eur_usd") {
    $resultat = $quantitat * $euros_a_dolars;
    echo "<h2>$quantitat € són aproximadament $resultat $</h2>";
} else {
    $resultat = $quantitat * $dolars_a_euros;
    echo "<h2>$quantitat $ són aproximadament $resultat €</h2>";
}
?>