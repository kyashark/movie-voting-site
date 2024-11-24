<?php

session_start();

if(!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1){
    header("Loaction:login.php");
}

$username = htmlspecialchars($_SESSION['username']);

?>

<h1>Welcome to Admin Admin Dashboard , <?php echo $username ?>.</h1>