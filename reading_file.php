<html>
     <head>
      <title>Reading a file using PHP</title>
   </head>
   <body>
        <?php
            $filename = 'redirect.php';
            $file = fopen($filename, "r");

            if($file == false) {
                echo "Error opening file";
                exit();
            }

            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);
            fclose($file);
            
            echo ( "File size : $filesize bytes" );
            echo ( "<pre>$filetext</pre>" );

            unset($filename);

        ?>
   </body>
</html>