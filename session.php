<?php
session_start();

function clearSession()
{
    session_destroy();
}

if (array_key_exists('clearSessionBtn', $_POST)) {
    clearSession();
    exit();
}

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

$msg = 'You have visited this page ' . $_SESSION['counter'];

echo $_SERVER['PHP_SELF'];
echo $_SERVER['argv'];
?>

<html>

<head>
    <title>Setting up a PHP session</title>
</head>

<body>
    <?php echo $msg; ?>
    <form method="POST">
        <input type="submit" name="clearSessionBtn" value="Clear Session" />
    </form>
</body>


</html>