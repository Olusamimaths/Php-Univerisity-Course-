<?php

?>

<html>
    <head></head>
    <title>Alumni Form</title>
    <body>
        <form method="POST" action="insert.php">
            <label>FullName: </label>
            <input type="text" name="txtFullName" />

            <label>Email: </label>
            <input type="email" name="txtEmail" />

            <label>PhoneNumber: </label>
            <input type="tel" name="txtPhoneNumber" />

            <label>Address: </label>
            <input type="text" name="txtAddress" />
        </form>
    </body>

    http://localhost/?txtFullName=Samuel%20Olusola&txtEmail=abc@gmail.com&txtPhoneNumber=09018282181&address=17,Suraju%20Street
</html>