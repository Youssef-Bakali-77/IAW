<?php
session_start();
$usuari = $_POST['usuari'] ?? '';
$pwd = $_POST['pwd'] ?? '';

if ($usuari && $pwd && $usuari === $pwd) {
    $_SESSION['usuari'] = $usuari;
    header("Location: info1.php");
} else {
    echo "Credencials incorrectes. <a href='index.html'>Tornar a login</a>";
}
?>
