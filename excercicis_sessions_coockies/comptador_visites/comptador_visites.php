<?php
if(isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'] + 1;
} else {
    $visites = 1;
}
setcookie('visites', $visites, time() + 3600*24*365); 

echo "<h1>Comptador de visites</h1>";
echo "<p>Has visitat aquesta pàgina $visites vegades.</p>";
