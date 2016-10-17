<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo "Title"; ?></title>
    </head>
      
    <body class="<?php echo "MyClass"; ?>">
    
        <form action="#" method="POST">
            <input type="submit">
        </form>
           
        <?php
           
            if($_SERVER["REQUEST_METHOD"] === "GET"){
                echo("Weszlismy na strone metoda get <br>");
                //var_dump($_GET);
                
                if(count($_GET) == 0){
                    echo("Brak danych GET <br>");
                    }
                
                foreach($_GET as $key => $value){
                    echo("Pod kluczem $key znajduje sie wartosc $value <br>");
                }
            }
            else if($_SERVER["REQUEST_METHOD"] === "POST"){
                echo("Weszlismy na strone metoda post");
            }
           
            //var_dump($_SERVER); 
   
        ?>
    </body>
</html>