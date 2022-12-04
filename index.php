<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('includes/header.php') ?>
    <?php
    $capital = 67 + $increment + 1;
    print "Variablle capital is $capital\n";

    print "Variablle capital is $Capital \n";

    $many = 2.288881;
    $many_2 = 2.211191;

    $few = $many + $many_2;

    print "many + many_2 = $few <br>";

    $right = '1'; // 0, ""
    $right = false;
    if ($right) {
        print 'Right is true <br>';
    } else {
        print 'Right is false <br>';
    }

    $true_num = 3 + 0.14159;
    $true_str = 'Tried and true';
    $true_array[49] = 'An array element';
    $false_array = [];
    $false_null = null;
    $false_num = 999 - 999;
    $false_str = '';

    $name = 'Sam';
    $literally = 'Name will not be printed $name';

    print $literally;

    print '<br>';

    $literally = "My variable name is printed: $name";
    print $literally;
    ?>

    <?php
    $channel = <<<_XML_

<channel>
   <title>What's For Dinner</title>
   <link>http://menu.example.com/ </link>
   <description>Choose what to eat tonight.</description>
</channel>
_XML_;

    echo <<<END
This uses the "here document" syntax to output multiple lines with variable 
interpolation. Note that the here document terminator must appear on a line with 
just a semicolon. no extra whitespace!


END;

    print $channel;
    ?>

    <?php
        function keepTrack() {
            STATIC $count = 0;
            $count++;
            print $count;
            print "<br/>";
        }

        keepTrack();
        keepTrack();
    ?>

</body>

</html>