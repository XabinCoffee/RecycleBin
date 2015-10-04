<?php  

$izenabizen = $_POST["name"];  
$email = $_POST["email"];  
$pasahitza = $_POST["password"];  
$tlf = $_POST["phone"];
$esp = $_POST["espezialitatea"];
$interesak = "Skydiving";

//Interesak hartzerakoan arazo bat dela eta, hau gerorako...
//<!--$interesak = $_POST["interests"];-->


//konexioa egin datubasearekin
$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
mysql_select_db("quiz",$con);
	
//Erabiltzailea txertatu
$sql = "INSERT INTO erabiltzaile (Izena, Pasahitza, Eposta, Telefonoa, Espezialitatea, Interesak) VALUES ('$_POST[name]','$_POST[password]','$_POST[email]','$_POST[phone]', '$_POST[espezialitatea]', '$_POST[espezialitatea]')";  
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

echo "1 line written";

// Konexioa ixteko
mysql_close ($con);

?>   
