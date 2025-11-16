<?php
session_start();
if(!isset($_SESSION['usuari'])){
    header("Location: index.html");
    exit();
}
?>
<h1>Pàgina d'informació 1</h1>
<p>Benvingut2, <?php echo $_SESSION['usuari']; ?> | <a href="logout.php">Tancar sessió</a></p>
<a href="info2.php">Anar a info2</a>

