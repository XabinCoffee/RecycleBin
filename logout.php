<?php
session_start();
unset($_SESSION["session_username"]); 
header("Location: layout.html");
exit();
?>

