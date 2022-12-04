<html>
    <head>
        <title>Accessing Cookies in PHP</title>
    </head>

    <body>
        <?php
            $name = $_COOKIE['name'];
            $hobby = $$_COOKIE['hobby'];

            echo "name " . $name . "<br/>";
            echo "hobby " . $hobby . "<br/>";
        ?>
    </body>
</html>