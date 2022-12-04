<?php
// include "redirect.php";
echo include_once "redirect.php";
 $x = false;

 $myName = "kdk";


//  echo isset($x), "\n";

//  echo empty($x), "\n";
$x = 1;
 function myFunc() {
    echo "My func";
     global $x;
    function myf() {
        global $x;
        echo $x . "innerFun";
    }
    myf();
 }

//   function MYFUNC() {
//     echo "My func";
//  }

 myFunc();
//  myfunc();

//  MYFUNC();
//  myFunC();
?>
