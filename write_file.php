<html>
     <head>
      <title>Writing to a file using PHP</title>
   </head>
   <body>
        <?php
            $filename = 'newFile.txt';
            $file = fopen($filename, "w");

            if($file == false) {
                echo "Error opening new file";
                exit();
            }

            fwrite($file, 'This is a sample text');
            fclose($file);
        ?>
   </body>
   
</html>