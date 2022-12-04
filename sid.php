<?php
   session_start();
   
   if (isset($_SESSION['counter2'])) {
      $_SESSION['counter2'] = 1;
   }else {
      $_SESSION['counter2']++;
   }
   
   $msg = "You have visited this page ".  $_SESSION['counter2'];
   $msg .= "in this session.";
   
   echo ( $msg );
?>

<p>
   To continue  click following link <br />
   
   <a  href="form_test.php?<?php echo htmlspecialchars(SID); ?>">Here</a>
</p>