<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuari = trim($_POST['usuari'] ?? '');
    $pwd = trim($_POST['pwd'] ?? '');

    if (empty($usuari) || empty($pwd)) {
        echo "<script>alert('Has d’omplir tots els camps.'); window.location='index.html';</script>";
        exit();
    }

    if ($usuari === $pwd) {
        $_SESSION['usuari'] = $usuari;
        header('Location: info1.php');
        exit();
    } else {
        echo "<script>alert('Usuari o contrasenya incorrectes.'); window.location='index.html';</script>";
        exit();
    }
} else {
    header('Location: index.html');
    exit();
}
?>
