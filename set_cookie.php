<?php
 setcookie("name", "Olusola Samuel", time()+3600, "/", "", 0);
 setcookie("hobby", "music", time() + 3600, "/", "", 0);


?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>