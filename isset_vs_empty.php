<?php

// PHP code to demonstrate the working
// of empty() function
$var1 = 0;
$var2 = 0.0;
$var3 = '0';
$var4 = null;
$var5 = false;
$var6 = [];
$var7 = '';

// For value 0 as integer
empty($var1) ? print_r("True\n") : print_r("False\n");

// For value 0.0 as float
empty($var2) ? print_r("True\n") : print_r("False\n");

// For value 0 as string
empty($var3) ? print_r("True\n") : print_r("False\n");

// For value Null
empty($var4) ? print_r("True\n") : print_r("False\n");

// For value false
empty($var5) ? print_r("True\n") : print_r("False\n");

// For array
empty($var6) ? print_r("True\n") : print_r("False\n");

// For empty string
empty($var7) ? print_r("True\n") : print_r("False\n");

// For not declare $var8
empty($var8) ? print_r("True\n") : print_r("False\n");

$str = 'GeeksforGeeks';

// Check value of variable is set or not
if (isset($str)) {
    echo 'Value of variable is set', "\n";
} else {
    echo 'Value of variable is not set', "\n";
}

$f = FALSE;
echo "variable is set? : ", isset($f) ? "True" : "False", "\n";

$arr = [];

// Check value of variable is set or not
if (!isset($arr[0])) {
    echo "\nArray is Empty";
} else {
    echo "\nArray is not empty";
}

?>
