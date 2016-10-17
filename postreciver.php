<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    foreach($_POST as $key => $value){
        echo("Pod kluczem $key znajdzuje sie <br>");
        var_dump($value);
        echo("<br>");
    }
    
/*    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        
        if(strlen($username) > 0 && strlen($password) > 0){
            echo("Witaj $username twoje haslo to: $password");
        }
        else{
            echo("Jedna z informacji jest pusta");
        }
    }*/
} else{
    echo("Wejdz na str POSTem");
}
