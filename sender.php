<?php
//var_dump($_GET);

$array = ["Jacek", "Ala", "Basia", "Kuba"];

foreach ($array as $name){
    echo("<a href='reciver.php?username=$name'>Link do strony $name</a><br>");
}


?>