<?php
 if($_POST["name"] || $_POST["age"]) {
    if(preg_match("/[^A-Za-z'-]/",$_POST['name'])) {
        die("invalid name and name should be alpha");
    }

    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " years old.";
    exit();
 }
?>

<?php 
 if($_GET["name"] || $_GET["age"]) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";
    exit();
 }
?>

<?php
   /*if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
      exit();
   }*/
?>

<html>
 <body>
    <form action="<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
    </form>
 </body>
</html>