<?php  

//konexioa egin datubasearekin
$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);
	
//Erabiltzailea txertatu
$sql = "SELECT * FROM erabiltzaile";  

if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}
	
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
	echo $row['Izena'];
}


// Konexioa ixteko
mysql_close ($con);

?>   
