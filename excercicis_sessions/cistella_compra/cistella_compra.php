<?php
session_start();

$preus = [
    "A" => 10,
    "B" => 20
];

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = [
        "A" => 0,
        "B" => 0
    ];
}

if (isset($_POST['afegir'])) {
    $producte = $_POST['afegir'];
    if ($producte === "A") {
        $_SESSION['cistella']['A'] += intval($_POST['quantitat_A']);
    } elseif ($producte === "B") {
        $_SESSION['cistella']['B'] += intval($_POST['quantitat_B']);
    }
    header("Location: index.html");
    exit();
}

if (isset($_POST['finalitzar'])) {
    $total = $_SESSION['cistella']['A'] * $preus['A'] + $_SESSION['cistella']['B'] * $preus['B'];
    echo "<h1>Resum de la compra</h1>";
    echo "<ul>";
    if ($_SESSION['cistella']['A'] > 0) {
        echo "<li>Producte A: {$_SESSION['cistella']['A']} unitats - " . ($_SESSION['cistella']['A'] * $preus['A']) . "€</li>";
    }
    if ($_SESSION['cistella']['B'] > 0) {
        echo "<li>Producte B: {$_SESSION['cistella']['B']} unitats - " . ($_SESSION['cistella']['B'] * $preus['B']) . "€</li>";
    }
    echo "</ul>";
    echo "<p><strong>Total: $total €</strong></p>";
    echo '<form method="post"><button type="submit" name="confirmar" value="1">Confirmar compra</button></form>';
    exit();
}

if (isset($_POST['confirmar'])) {
    $_SESSION['cistella'] = ["A" => 0, "B" => 0];
    echo "<h1>Compra realitzada correctament!</h1>";
    echo '<a href="index.html">Tornar a la botiga</a>';
    exit();
}
?>
