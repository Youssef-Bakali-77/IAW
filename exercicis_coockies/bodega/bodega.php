<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $majoredat = $_POST['majoredat'] ?? 'no';
    $idioma = $_POST['idioma'] ?? 'cat';
    $moneda = $_POST['moneda'] ?? 'eur';

    setcookie('majoredat', $majoredat, time() + 3600, '/');
    setcookie('idioma', $idioma, time() + 3600, '/');
    setcookie('moneda', $moneda, time() + 3600, '/');

    header('Location: info.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h1>Benvingut a la nostra bodega</h1>
    <form method="post" action="">
        <label>Ets major d’edat?</label><br>
        <input type="radio" name="majoredat" value="si" required> Sí
        <input type="radio" name="majoredat" value="no"> No
        <br><br>

        <label>Tria l’idioma:</label><br>
        <select name="idioma" required>
            <option value="cat">Català</option>
            <option value="esp">Español</option>
            <option value="eng">English</option>
        </select>
        <br><br>

        <label>Tria la moneda:</label><br>
        <select name="moneda" required>
            <option value="eur">Euros (€)</option>
            <option value="gbp">Lliures (£)</option>
            <option value="usd">Dòlars ($)</option>
        </select>
        <br><br>

        <button type="submit">Continuar</button>
    </form>
</body>
</html>
