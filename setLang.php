<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $language = $_POST['language'];
    //echo ("Wybrany jezyk to: $language");
    
    if($language == "clear"){
        //TODO: usunac ciasteczko
        setcookie("language", "", 1);   //przykladowe 1-czas kt na pewno minal
    }
    else {
        setcookie("language", $language, time() + (3600 * 24)); //nastaw. cookie na dzien
    }  
}
//przekierowanie na inna strone
header("Location: http://localhost/WAR_FRO_S_11_Podstawy_PHP/przyklady_day2/langForm.php");
       
?>