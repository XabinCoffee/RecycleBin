<?php

$email = $_GET['email'];
$pasa = $_GET['pasa'];
$tlf = $_GET['tlf'];

//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);



$telefonoa = "";

$result = mysql_query("SELECT * FROM erabiltzaile");
while ($row = mysql_fetch_object($result)) {
	if ($email == $row->Eposta){
    $telefonoa = $row->Telefonoa;
	}
}



if ($telefonoa == $tlf){
	$sql = "UPDATE erabiltzaile SET Pasahitza='$_GET[pasa]' WHERE Eposta='$_GET[email]'";  

if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

echo "Pasahitza eguneratu da.";
}
else{
	echo "Erabiltzaile-telefono konbinazio okerra!";
}


?>