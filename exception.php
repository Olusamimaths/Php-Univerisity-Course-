<?php
 try {
    $error = 'Always throws an exception';
    throw new Exception($error);

    echo "Not reached";
 } catch(Exception $e) {
    echo 'Caught Exception: ' , $e->getMessage() , "\n";
 }

 echo 'Hello';
?>