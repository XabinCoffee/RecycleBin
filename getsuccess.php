<?php
session_start();
echo "<h1>";
echo "Asmatu: " . $_SESSION['success'];
echo "<br>";
echo "Saiakera: " . $_SESSION['attempt'];
echo "<br>";
echo "</h1>";
?>