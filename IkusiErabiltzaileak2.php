<?php

//Konexioa sortu datubasearekin
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

//Probak lokalki egiteko
$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);

//Erabiltzaile taulatik dena aukeratu
$query="SELECT * FROM erabiltzaile";
$erabguztiak=mysql_query($query);

$lerrokop=mysql_numrows($erabguztiak);mysql_close();

echo "<b>
<center>Erabiltzaileak</center>
</b>
<br>
<br>";

$i=0;


//Jasotako erabiltzaile bakoitza inprimitzeko
while ($i < $lerrokop){
	$izenabizen=mysql_result($erabguztiak,$i,"Izena");
	$email=mysql_result($erabguztiak,$i,"Eposta");
	$pasahitza=mysql_result($erabguztiak,$i,"Pasahitza");
	$tlf=mysql_result($erabguztiak,$i,"Telefonoa");
	$esp=mysql_result($erabguztiak,$i,"Espezialitatea");
	$interesak=mysql_result($erabguztiak,$i,"Interesak");

	echo "<b>
	$izenabizen $email</b>
	<br>
	$pasahitza<br>
	$tlf<br>
	$esp<br>
	$interesak<hr>
	<br>";
	$i++;
}

?>