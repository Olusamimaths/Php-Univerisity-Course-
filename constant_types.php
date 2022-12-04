<?php
 echo $name;
 $name = "Hello World";
//  echo MAX_SIZE;
 define('MAX_SIZE', 1024);

 constant('MAX_SIZE');

 // Valid constant names
define("ONE",     "first thing");
define("TWO2",    "second thing");
define("THREE_3", "third thing");
define("__THREE__", "third value");

// Invalid constant names
define("2TWO",    "second thing");

// echo __LINE__;
// echo __FILE__;
// echo __DIR__;
// echo __FUNCTION__;

// if(true && true) {
//     echo "true";
// }

if(true and true && FALSE) {
    echo "true 1\n";
} elseif(true && false) {
    echo "false 1\n";
} elseif(true or false) {
    echo "true 2\n";
}
?>

 <?php
         $d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }

 $array = array(1, 2, 3, 4, 5);

 foreach( $array as $value ) {
    echo "Value is $value <br/>";
 }

 echo "Array $array";

 $salaries = array("mohamed" => 2000, "qadir" => 1000, "zara" => 500);

 echo "Salary of mahmoud is ".$salaries['mohamed']."<br/>";
 echo "Salary of qadir is ".$salaries['qadir']."<br/>\n";

 $marks = array(
    "mohammad" => array(
        "physics" => 56,
        "mathematics" => 42,
        "english" => 80
    ),
    "taiye" => array(
        "physics" => 78,
        "mathematics" => 66,
        "english" => 77
    ),
    "tope" => array(
        "physics" => 78,
        "mathematics" => 90,
        "english" => 90
    )
    );

    echo "Marks for Mohammad in physics : ";
    echo $marks['mohammad']['physics'];

    echo "Marks for Taiye in physics : ";
    echo $marks['taiye']['physics'];

    echo "Marks for Tope in physics : ";
    echo $marks['tope']['physics'] . "\n";

    echo strlen("KPK") . "\n";

    echo strpos("Hello world!","orld");

?>