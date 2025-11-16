<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header('Location: index.html');
    exit();
}

$usuari = $_SESSION['usuari'];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Informació 1</title>
</head>
<body>
    <header>
        <h3>Benvingut/da, <?= htmlspecialchars($usuari) ?></h3>
        <nav>
            <a href="info1.php">Pàgina 1</a> |
            <a href="info2.php">Pàgina 2</a> |
            <a href="logout.php">Tancar sessió</a>
        </nav>
    </header>
    <hr>

    <h1>Pàgina d'informació 1</h1>
    <p>Aquesta és la primera pàgina d’informació accessible només si has iniciat sessió.</p>
</body>
</html>
