<?php  
//konexioa egin datubasearekin
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);
	
//Erabiltzailea txertatu
$sql = "INSERT INTO erabiltzaile (Izena, Pasahitza, Eposta, Telefonoa, Espezialitatea, Interesak) VALUES ('$_POST[name]','$_POST[password]','$_POST[email]','$_POST[phone]', '$_POST[Espezialitatea]', '$_POST[interests]')";  
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

echo "1 line written";
 
echo "<hr> <a href='IkusiErabiltzaileak2.php'>Ikusi Erabiltzaileak</a>";

// Konexioa ixteko
mysql_close ($con);

?>   
