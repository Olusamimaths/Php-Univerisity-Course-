<?php
$time = time();

$arr = getdate($time);

echo 'seconds ', $arr['seconds'], "\n";
echo 'minutes ', $arr['minutes'], "\n";
echo 'hours ', $arr['hours'], "\n";
echo 'week day ', $arr['wday'], "\n";
echo 'month ', $arr['month'], "\n";

print date('m/d/y G.i:s<br>', time());
echo '<br>';
print 'Today is ';
print date("j of F Y, \a\\t g.i a", time());

?>
