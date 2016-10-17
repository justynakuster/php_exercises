<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo "Title"; ?></title>
    </head>
      
    <body>

  <form action="setLang.php" method="post">
     <select name="language">
         <option value="en">english</option>
         <option value="pl">polish</option>
         <option value="clear">delete remembered language</option>
     </select>
     <input type="submit">    
  </form>
  
       
<!--check if cookie is set-->
    <?php
        if(isset($_COOKIE['language'])){
            echo("wybrany przez ciebie jezyk to: {$_COOKIE['language']}");
        }
        else {
            echo("Brak zapamietanego jezyka");
        }
    ?>

    </body>
</html>