<?php
setcookie("heroname", "Superman");
setcookie("quest", "Save the world");

$expire = time() + (60 * 60 *24 * 7);
setcookie("favoritecolor", "green", $expire);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookie Example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body>
        <?php if(isset($_COOKIE['heroname']) && isset($_COOKIE['quest']))
        
        
        
        ?>
        
        <p>Welcome, <?= $_COOKIE['heroname']; ?>. Thanks for completing your quest of
        <?= $_COOKIE['quest']; ?>.
            

    </body>
</html>

