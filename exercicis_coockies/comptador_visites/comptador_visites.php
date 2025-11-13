<?php
if (!isset($_COOKIE["comptador"])){
    setcookie("comptador", 0);
} else {
    setcookie("comptador", $_COOKIE["comptador" ]+1);
}

if (!isset($_POST["codi"])){
    setcookie("hacomprat", 0);
} else {
    setcookie("hacomprat", 1);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>
    <h1>Benvingut a la nostra botiga!</h1>
    <p><strong>Visites actuals:</strong>
    <?php
    echo $_COOKIE["comptador"]
    ?>
    <form method="POST">
        <label for="codi">Introdueix el teu codi de descompte:</label><br>
        <input type="text" id="codi" name="codi" placeholder="Ex: BOTIGA20 o BOTIGA50"><br><br>
        <button type="submit" name="compra">Comprar</button>
    </form>

    <form method="post" action="">
        <button type="submit" name="reset">Reiniciar visites</button>
    </form>
<?php
    if($_COOKIE["comptador"]==5){
        echo"<br>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }elseif($_COOKIE["comptador"] == 10 && $_COOKIE["hacomprat"] == 0){
        echo"<br>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    }
    ?>

</body>
</html>