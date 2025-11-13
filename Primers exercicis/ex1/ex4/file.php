<?php
$estil=$_GET["estil"];

switch ($estil){
    case "rock":
        echo "el rock es molt bo";
        break;
    case "pop":
        echo "el pop es molt divertit";
        break;
    case "jazz":
        echo "el jazz es molt relaxant";
        break;
    case "electronic":
        echo "la musica electrònica es molt energica";
        break;
}
?>

