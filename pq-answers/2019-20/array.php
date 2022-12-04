<?php
 $services = array(
    'saas' => array('name' => 'premeir', "cat" => "ERP"),
    'paas' => array('os' => 'windows', "location" => "abuja"),
    'iaas' => array('manager' => 'Akindf', "machine" => "addf"),
 );


 foreach($services as $platform_key => $platform_array) {
    echo $platform_key . " ---> <br/>";
    foreach($platform_array as $key => $value) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;".$key . " => " .$value ."<br/>";
    }
 }
?>