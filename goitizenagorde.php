<?php
session_start();
$nick = $_GET['a'];
$_SESSION['nick']=$nick;

 echo "Ongietorri, " . $_SESSION['nick'];


?>