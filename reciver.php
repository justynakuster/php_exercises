<?php
if($_SERVER["REQUEST_METHOD"] === "GET"){
    if(isset($_GET["username"]) == true){
        $username = $_GET["username"];
        $username = trim($username);
        
        if(strlen($username) > 0){
            echo("Witaj $username");
        }
        else {
            echo("Zmienna usernme jest pusta");
        }
    }
    else{
        echo("Brak zmiennej username w GET");
    }
}
else{
    echo("Wejdz na strone metoda GET");
}


?>